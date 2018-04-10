<?php

$aliases['dev'] = array(
    'uri'=> 'habitatsarnia.ccistaging.com',
    'root' => '/home/staging/subdomains/habitatsarnia/public_html',
    'remote-host'=> 'host.ccistudios.com',
    'remote-user'=> 'staging',
    'path-aliases'=> array(
        '%files'=> 'sites/default/files',
    ),
);

$aliases['live'] = array(
    'uri'=> 'live.habitatsarnia.org',
    'root' => '/home/habitat/subdomains/live/public_html',
    'remote-host'=> 'host.cciserver2.com',
    'remote-user'=> 'habitat',
    'path-aliases'=> array(
        '%files'=> 'sites/default/files',
    )
);
