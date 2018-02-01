<?php

/**
 * Configuração local do Trello (Chaves e dados sensíveis).
 *
 * Para obter uma key, acesse https://trello.com/app-key estando logado com sua conta no Trello
 * Para obter um token, acesse https://trello.com/1/authorize?expiration=never&scope=read,write,account&response_type=token&name=Integracao%20Trello&key=<SUA KEY AQUI>
 */

return [
    'trello' => [
        'auth' => [
            'key' => '',
            'token' => ''
        ]
    ]
];
