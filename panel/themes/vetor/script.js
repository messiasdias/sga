/** 
 * Vetor Panel
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */
(function() {
    "use strict";
    
    window.VetorPanel = function(config) {
        
        var timestamp = 0,
            newConfig = null, 
            timeoutId = 0, 
            attached = false, 
            feed = null,
            slider = $("#media");

        slider.index = 0;
        slider.widgets = [];
    
        // mostra o widget a partir do index
        slider.show = function(index) {
            if (slider.widgets && slider.widgets[index]) {
                slider.find('.widget').fadeOut(500);
                slider.widgets[index].elem.fadeIn(500);
                slider.index = index;
                checkWidget(slider.index);
            }
        };
        // passa para o proximo widget
        slider.nextSlide = function() {
            // se tiver novos widgets carregados, substitui
            if (newConfig !== null) {
                createContents(newConfig);
                newConfig = null;
            } else {
                if (slider.widgets.length > 1) {
                    // proximo widget da lista
                    if (slider.index < slider.widgets.length - 1) {
                        slider.index++;
                    } else {
                        slider.index = 0;
                    }
                    slider.show(slider.index);
                } else {
                    checkWidget(0);
                }
            }
        };
        slider.currentWidget = function() {
            return slider.widgets[slider.index];
        };

        var loadConfig = function(callback) {
            var url = PainelWeb.Storage.get('url');
            if (url && url !== '') {
                $.ajax({
                    url: url + '/api/extra/vetor.panel',
                    cache: false,
                    success: function(data) {
                        if (data) {
                            if (timestamp !== data.timestamp) {
                                callback(data);
                            }
                            timestamp = data.timestamp;
                        }
                    },
                    error: function() {
                        $('#media').html('<span class="label label-danger">Módulo Vetor Panel não encontrado</span>');
                    }
                });
            }
        };

        var createContents = function(config) {
            config = config || {};
            /*
             * widgets
             */
            if (config.widgets) {
                slider.html('');
                slider.widgets = [];
                for (var i = 0, j = 0; i < config.widgets.length; i++) {
                    var widget = config.widgets[i];
                    if (widget.active) {
                        widget.index = j++;
                        widget.elem = createContent(widget).hide();
                        slider.append(widget.elem);
                        widget.elem.css('line-height', widget.elem.parent().height() + 'px');
                        slider.widgets.push(widget);
                    }
                }
                if (slider.widgets.length) {
                    slider.show(0);
                }
            }

            /*
             * news
             */
            if (config.news) {
                if (!feed) {
                    feed = new Feed(config.news.sources, config.news.interval);
                } else {
                    feed.update(config.news.sources, config.news.interval);
                }
            }
        };

        var createContent = function(widget) {
            var elem = $('<div class="widget widget-' + widget.type +'" style="background-color:' + widget.background + '"></div>');
            switch (widget.type) {
                case 'html':
                    // strip script tag
                    elem.append(widget.content.replace(/<script.*?>.*?<\/script>/im, ''))
                        .addClass('loaded');
                    break;
                case 'image':
                    elem.append(
                        $("<img/>")
                            .prop('alt', widget.title)
                            .css({
                                "width": slider.width()
                            })
                            .on('load', function() {
                                elem.addClass('loaded');
                                if (widget.index === slider.currentWidget().index) {
                                    checkWidget(widget.index);
                                }
                            })
                            .prop('src', widget.content)
                    );
                    break;
                case 'video':
                case 'audio':
                    elem.append(
                        $('<' + widget.type + '></' + widget.type + '>')
                            .on('ended error', function() {
                                slider.nextSlide();
                            })
                            .on('loadeddata canplay', function() {
                                elem.addClass('loaded');
                                if (widget.index === slider.currentWidget().index) {
                                    checkWidget(widget.index);
                                }
                            })
                            .css({
                                width: slider.width()
                            })
                            .append('<source src="' + widget.content + '?_=' + ((new Date()).getTime()) + '" type="' + mimetype(widget.content) + '">')
                    );
                    break;
                case 'youtube':
                    elem.append('<div id="yt-player-' + widget.index + '"></div>');
                default:
                    elem.append('unknown');
            }
            return elem;
        };

        var checkWidget = function(index) {
            var widget = slider.widgets[index];
            if (widget) {
                clearTimeout(timeoutId);
                switch (widget.type) {
                    case 'html':
                    case 'image':
                        timeoutId = setTimeout(function() {
                            slider.nextSlide();
                        }, widget.duration);
                        break;
                    case 'video':
                    case 'audio':
                        if (widget.elem.hasClass('loaded')) {
                            var elem = widget.elem.find(widget.type);
                            elem.trigger('play');
                        } else {
                            // se ainda nao carregou, espera um tempo e vai pro proximo
                            timeoutId = setTimeout(function() {
                                slider.nextSlide();
                            }, 5 * 1000);
                        }
                        break;
                case 'youtube':
                    Youtube.play(widget);
                    break;
                }
                changeVolume(widget.volume);
            }
        };

        var mimetype = function(url) {
            var ext = url.split(".").reverse()[0];
            switch (ext) {
                case 'mp3':
                    return 'audio/mp3';
                case 'mp4':
                    return 'video/mp4';
                case 'ogg':
                case 'ogv':
                    return 'video/ogg';
            }
            return "application/" + ext;
        };

        var changeVolume = function(volume) {
            var widget = slider.currentWidget();
            if (widget) {
                switch (widget.type) {
                    case 'audio':
                    case 'video':
                        widget.elem.find(widget.type).prop('volume', volume / 100);
                        break;
                    case 'youtube':
                        var player = Youtube.players[widget.index];
                        if (player && player.loaded) {
                            player.setVolume(volume);
                        }
                        break;
                }
            }
        };

        /**
         * @constructor
         */
        var Feed = function(sources, interval) {
            var self = this;
            var timeoutId = 0;

            this.index = -1;
            this.newConfig = null;

            this.currentSource = function() {
                return self.sources[self.index];
            };

            this.nextSource = function() {
                if (self.newConfig) {
                    self.index = -1;
                    var config = self.newConfig;
                    self.newConfig = null;
                    self.update(config.sources, config.interval);
                } else {
                    self.index++;
                    if (self.index >= self.sources.length) {
                        self.index = 0;
                    }
                }
            };

            this.show = function(item, source) {
                $('#news .panel-heading span').text((source.index + 1) + '/' + source.items.length);
                $('#news .panel-body').text(item.title);
            };
            
            this.listen = function() {
                clearTimeout(self.timeoutId);
                self.timeoutId = setTimeout(function() {
                    var source = self.currentSource();
                    if (source && source.items) {
                        if (source.index < source.items.length - 1) {
                            source.index++;
                            self.show(source.items[source.index], source);
                            self.listen();
                        } else {
                            // acabou o feed atual, indo pro proximo
                            self.nextSource();
                            self.load();
                        }
                    } else {
                        // nenhum item no feed, tenta o proximo
                        self.nextSource();
                    }
                }, self.interval);
            };

            this.update = function(sources, interval) {
                if (self.index === -1) {
                    // creating
                    self.index = 0;
                    self.sources = sources;
                    self.sources[self.index].items = [];
                    self.sources[self.index].index = 0;
                    self.interval = interval;
                    self.load();
                } else {
                    // updating (wait transition)
                    self.newConfig = {
                        sources: sources, 
                        interval: interval
                    };
                }
            };

            this.load = function() {
                var source = self.currentSource();
                if (source) {
                    var url = source.url, dataType, parser;
                    switch (source.type) {
                        case 'rss':
                            // xml parser
                            dataType = 'xml';
                            parser = function(data) {
                                var items = [];
                                var nodes = data.getElementsByTagName('item');
                                for (var i = 0; i < nodes.length; i++) {
                                    var node = nodes[i];
                                    items.push({
                                        title: node.getElementsByTagName('title')[0].innerHTML,
                                        content: node.getElementsByTagName('description')[0].innerHTML
                                    });
                                }
                                return items;
                            };
                            break;
                        case 'atom':
                            dataType = 'xml';
                            // xml parser
                            parser = function(data) {
                                var items = [];
                                var nodes = data.getElementsByTagName('entry');
                                for (var i = 0; i < nodes.length; i++) {
                                    var node = nodes[0];
                                    items.push({
                                        "title": node.getElementsByTagName('title')[0].innerHTML,
                                        "content": node.getElementsByTagName('content')[0].innerHTML
                                    });
                                }
                                return items;
                            };
                            break;
                        default:
                            // google apis
                            url = document.location.protocol + '//ajax.googleapis.com/ajax/services/feed/load?v=1.0&num=10&callback=?&q=' + encodeURIComponent(source.url);
                            dataType = 'json';
                            parser = function(data) {
                                if (data.responseData && data.responseData.feed) {
                                    return data.responseData.feed.entries || [];
                                }
                                return [];
                            };
                    }
                    $.ajax({
                        url: url,
                        dataType: dataType,
                        success: function(data) {
                            if (data) {
                                source.index = 0;
                                source.items = parser(data);
                                if (source.items.length > 0) {
                                    self.show(source.items[0], source);
                                } else {
                                    // se nao tiver noticias no feed atual, joga pro proximo
                                    self.nextSource();
                                }
                            };
                        },
                        complete: function() {
                            self.listen();
                        },
                        error: function() {
                            $('#news .panel-body').html('<span class="text-danger">Não foi possível carregar as notícias, verifique a conectividade com a Internet.</span>');
                        }
                    });
                }
            };
            
            this.update(sources, interval);

        };

        var Youtube = { 
            loaded: false, 
            interval: 0,
            referenced: false,
            players: [],
            loadapi: function() {
                var tag = document.createElement('script');
                tag.src = "//www.youtube.com/iframe_api";
                window.onYouTubeIframeAPIReady = function() {
                    Youtube.loaded = true;
                };
                var firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
            },
            play: function(widget) {
                if (this.loaded) {
                    var player = this.players[widget.index];
                    if (!player) {
                        player = new YT.Player('yt-player-' + widget.index, {
                            height: slider.height(),
                            width: slider.width(),
                            videoId: widget.content,
                            playerVars: {
                                disablekb: 1,
                                controls: 0,
                                showinfo: 0,
                                rel: 0,
                                iv_load_policy: 3
                            },
                            events: {
                                onReady: function() {
                                    if (widget.index === slider.currentWidget().index) {
                                        player.loaded = true;
                                        checkWidget(widget.index);
                                        player.playVideo();
                                    }
                                },
                                onStateChange: function(event) {
                                    if (event.data === YT.PlayerState.ENDED) {
                                        Youtube.players[widget.index].destroy();
                                        Youtube.players[widget.index] = null;
                                        slider.nextSlide();
                                    }
                                }
                            }
                        });
                    }
                    this.players[widget.index] = player;
                    if (player.loaded) {
                        player.playVideo();
                    }
                } else {
                    if (!this.referenced) {
                        this.loadapi();
                        this.referenced = true;
                    }
                    clearTimeout(Youtube.interval);
                    Youtube.interval = setTimeout(function() {
                        Youtube.play(widget);
                    }, 100);
                }
            }
        }

        var init = function() {
            // callbacks
            if (!attached) { 
                PainelWeb.on('callstart', function() {
                    changeVolume(0);
                });

                PainelWeb.on('callend', function() {
                    var widget = slider.currentWidget();
                    changeVolume(widget && widget.volume ? widget.volume : 1);
                });
                attached = true;
            }

            // iniciando slider
            loadConfig(function(config) {
                createContents(config);
            });
            // verificacao de alteracao
            setInterval(function() {
                loadConfig(function(config) {
                    newConfig = config;
                });
            }, 30 * 1000);
        };

        // update media size
        $(window).resize(function() {
            slider.find('img, iframe').css({
                "width": slider.width(),
                "height": slider.height()
            });
            slider.find('video').css({
                "width": slider.width()
            });
            slider.find('.widget').each(function(i, e) {
                var elem = $(e);
                elem.css('line-height', elem.parent().height() + 'px');
            });
        });

        var tick = function(scope) {
            scope.$apply(function() {
                var date = new Date();
                scope.clock = date.getTime();
                scope.month = scope.months[date.getMonth()];
                setTimeout(function() {
                    tick(scope);
                }, 1000);
            });
        };

        // clock
        var scope = angular.element(document.getElementById('relogio')).scope();
        scope.months = ['janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
        tick(scope);

        PainelWeb.on('save', function() {
            init();
        });

        init();
    };
    
})();
