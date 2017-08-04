<?php
/**
 * Created by PhpStorm.
 * Date: 03.08.2017
 * Time: 14:01
 */

$routesMap = [
    'cacheFile' => $projectDir . '/var/cache/route.cache', /* required */
    'routes' => [
        ['routesFilePath' => $projectDir . '/config/routes.yml', 'routesPrefix' => ''],                                  /*project monolith*/
        ['routesFilePath' => $projectDir . '/services/target/config/routes.yml', 'routesPrefix' => '/target'],           /*micro-service: target*/
        ['routesFilePath' => $projectDir . '/services/content/config/routes.yml', 'routesPrefix' => '/content'],         /*micro-service: content*/
    ]
];