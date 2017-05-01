<?php

return [
    'forum_domain' => env('VANILLA_FORUM_DOMAIN', 'vanilla.dev'),
    'sso'          => env('VANILLA_FORUM_URL', 'http://vanilla.dev') . '/sso',
    'client_id'    => env('VANILLA_FORUM_CLIENT_ID'),
    'secret'       => env('VANILLA_FORUM_SECRET'),
];
