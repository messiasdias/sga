// ==ClosureCompiler==
// @compilation_level ADVANCED_OPTIMIZATIONS
// @output_file_name app.js
// ==/ClosureCompiler==

/**
 * Vetor Panel
 * @author Rogerio Lino <rogeriolino@gmail.com>
 */

// using function/vars as array index to prevent obfuscator to rename it

(function() {
    function PanelController($scope, $http, $sce) {

        var SGA = window['SGA'] || { "baseUrl": '' };
        var $ = window['jQuery'];
        var config = window['config'] || {};

        // updating widgets in case of upgrade
        for (var i = 0; i < config['widgets'].length; i++) {
            var widget = config['widgets'][i];
            widget.active = (widget.active === undefined || widget.active);
            if ((widget.type === 'video' || widget.type === 'audio') && widget.volume === undefined) {
                widget.volume = 100;
            }
        }

        $scope['config'] = config;
        $scope['config'].news = $scope['config'].news || { sources: [] };


        $scope['widget'] = {};

        var previewModal = $('#dialog-preview')
        ['on']('hidden.bs.modal', function() {
            switch ($scope['widget'].type) {
                case 'image':
                    $('#image-preview')['prop']('src', '');
                    break;
                case 'video':
                    $('#video-player')['trigger']('pause')['html']('');
                    break;
                case 'audio':
                    $('#audio-player')['trigger']('pause')['html']('');
                    break;
                case 'html':
                    $scope['$apply'](function() {
                        $scope['htmlPreview'] = '';
                    });
                case 'youtube':
                    $('#youtube-iframe').prop('src', '');
                    break;
            }
        });

        $scope['sortableOptions'] = {
            handle: '>.panel-heading .handle'
        };

        $scope['save'] = function() {
            $('#ajax-loading').show();
            $('#btn-save')['prop']('disabled', true);
            $scope['config'].timestamp = (new Date()).getTime();
            $http['post'](SGA['baseUrl'] + "/modules/vetor.panel/save", $scope['config'])
                    ['success'](function() {
                        $('#ajax-loading')['hide']();
                        $('#btn-save')['prop']('disabled', false);
                    });
        };

        $scope['styleClass'] = function(widget) {
            switch (widget.type) {
                case 'html':
                    return 'file';
                case 'image':
                    return 'picture';
                case 'video':
                    return 'film';
                case 'audio':
                    return 'music';
                case 'youtube':
                    return 'play-circle';
            }
        };

        $scope['addWidget'] = function(type) {
            var widget = {
                active: true,
                type: type || 'html',
                title: 'Sem nome',
                content: '',
                background: '#000000'
            };
            if (widget.type !== 'video') {
                widget.duration = 60 * 1000;
            }
            if (widget.type === 'video' || widget.type === 'audio' || widget.type == 'youtube') {
                widget.volume = 100;
            }
            $scope['config']['widgets'].push(widget);
            setTimeout(updateGui, 300);
        };

        $scope['deleteWidget'] = function(widget) {
            if (confirm('Deseja realmente remover esse widget?')) {
                $scope['config']['widgets'].splice($scope['config']['widgets'].indexOf(widget), 1);
            }
        };

        $scope['addFeed'] = function(type) {
            $scope['config']['news']['sources'].push({
                url: '',
                type: 'googleapi'
            });
        };

        $scope['deleteFeed'] = function(feed) {
            if (confirm('Deseja realmente remover esse Feed?')) {
                $scope['config']['news']['sources'].splice($scope['config']['news']['sources'].indexOf(feed), 1);
            }
        };

        $scope['preview'] = function(widget) {
            $scope['widget'] = widget;
            $('.preview')['hide']();
            $('.preview.preview-' + widget.type).show();
            switch (widget.type) {
                case 'video':
                    $('#video-player')
                            ['html']('')
                            .append(
                                $('<source>')
                                ['prop']('src', widget.content)
                                ['prop']('type', 'video/mp4')
                            )
                            ['trigger']('play');
                    break;
                case 'audio':
                    $('#audio-player')
                            ['html']('')
                            .append(
                                $('<source>')
                                ['prop']('src', widget.content)
                                ['prop']('type', 'audio/mpeg')
                            )
                            ['trigger']('play');
                    break;
                case 'image':
                    $('#image-preview')['prop']('src', widget.content);
                    break;
                case 'html':
                    $scope['htmlPreview'] = $sce['trustAsHtml'](widget.content.replace(/<script.*?>.*?<\/script>/im, ''));
                    break;
                case 'youtube':
                    $('#youtube-iframe')['prop']('src', 'http://www.youtube.com/embed/' + widget.content + '?autoplay=1');
                    break;
            }
            previewModal['modal']('show');
        };

        $(function() {
            updateGui();
        });

    };

    angular['module']('vetor', ['ui.sortable', 'NgSwitchery'], ['$interpolateProvider', function($interpolateProvider) {
        // twig conflict
        $interpolateProvider['startSymbol']('[[');
        $interpolateProvider['endSymbol'](']]');
    }])
    ['controller']('panelCtrl', ['$scope', '$http', '$sce', PanelController]);

    function updateGui() {
        accordion();
        colorPicker();
    }

    function accordion() {
        $('#widgets .toggle')['off']().click(function(e) {
            $('#widgets .panel-body:not(:eq(' + $(this).parent().parent().parent().index() +'))')['slideUp']();
            $(this).parent().parent().next()['slideToggle']();
            return false;
        });
    }

    function colorPicker() {
        $('.color-picker')['colpick']({
            "layout": 'hex',
            "submit": 0,
            "onChange": function(hsb, hex, rgb, el, bySetColor) {
                var color = '#' + hex;
                $(el).parent().find('span')['css']('background-color', color);
                if (!bySetColor) {
                    $(el)['val'](color);
                    $(el)['trigger']('change');
                }
            }
        })['keyup'](function(){
            $(this)['colpickSetColor'](this.value);
        })['removeClass']('color-picker');
    }

})();
