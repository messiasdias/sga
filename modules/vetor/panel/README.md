# Vetor Panel Admin

Móulo de administração do layout Vetor Panel

## Requisitos

Novo SGA v1.3 ou superior

## Instalação

Acessar módulo de gerenciamento de módulos, clicar em "Novo", escolher arquivo ZIP
do módulo vetor.panel e aguardar a instalação.

Após confirmação da instalação, habilitar o módulo Vetor Panel também no gerenciamento
de módulos. Depois liberar permissão de acesso aos usuários através do módulo de cargos.

Por fim, adicionar nova rota à API do NovoSGA: Criar ou alterar arquivo ```config/api.php``` 
adicionando a seguinte configuração de rota:

```php
<?php
return array(
    'extra' => array(
        'routes' => array(
            'vetor.panel' => function() {
                $api = new modules\vetor\panel\PanelApi();
                $api->api();
            }
        )
    )
);
```