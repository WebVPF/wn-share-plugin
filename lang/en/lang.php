<?php

return [
    'plugin' => [
        'name' => 'Share',
        'description' => 'Buttons - Share on social networks'
    ],
    'component' => [
        'name' => 'Share buttons',
        'description' => 'Displays share buttons on social networks'
    ],
    'css' => [
        'title' => 'Enable CSS',
        'desc' => 'Check box to include a css file with button styles'
    ],
    'skin' => [
        'title' => 'Button Style',
        'desc' => 'Choose a buttons style. Only works if css is enabled',
        'placeholder' => 'Button Style',
        'silver' => 'Silver',
        'color' => 'Color',
        'text' => 'With text',
        'custom' => 'Custom',
    ],
    'buttons' => [
        'title' => 'Buttons',
        'desc' => 'Specify the id of the buttons that you want to display, separated by commas (fb,tw,vk,ok,in,tg,vb,wa)',
        'fb' => 'Facebook',
        'in' => 'LinkedIn',
        'vk' => 'VK',
        'tg' => 'Telegram',
        'ok' => 'Odnoklassniki',
        'tw' => 'Twitter',
        'vb' => 'Viber',
        'wa' => 'WhatsApp',
    ],
];
