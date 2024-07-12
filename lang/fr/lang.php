<?php

return [
    'plugin' => [
        'name' => 'Partage',
        'description' => 'Buttons - Partager sur les réseaux sociaux'
    ],
    'component' => [
        'name' => 'Boutons de partage',
        'description' => 'Affiche les boutons de partage sur les réseaux sociaux'
    ],
    'css' => [
        'title' => 'Activer le CSS',
        'desc' => 'Inclure le fichier styles des boutons du plugin'
    ],
    'skin' => [
        'title' => 'Style de boutons',
        'desc' => 'Choisissez un style de bouton. Ne fonctionne que si les css sont activés',
        'placeholder' => 'Style de boutons',
        'silver' => 'Argenté',
        'color' => 'Couleur',
        'text' => 'Avec texte',
        'custom' => 'Personnalisé',
    ],
    'buttons' => [
        'title' => 'Boutons',
        'desc' => 'Spécifiez l\'identifiant des boutons que vous souhaitez afficher, séparés par des virgules (fb,tw,vk,ok,in,tg,vb,wa).',
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
