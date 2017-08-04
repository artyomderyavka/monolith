<?php
/**
 * Created by PhpStorm.
 * Date: 04.08.2017
 * Time: 13:21
 */

$servicesMap = [
    'cachedContainerFile' => $projectDir .'/var/cache/container.php',
    'servicesFiles' => [
        'config/services.yml',                         /*project monolith*/
        'services/target/config/services.yml',         /*micro-service: target*/
        'services/content/config/services.yml',        /*micro-service: content*/
    ]
];