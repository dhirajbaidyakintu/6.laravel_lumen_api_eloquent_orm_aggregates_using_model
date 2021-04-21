<?php

$router->get('/count', 'StudentDetailsController@aggregatesCount');
$router->get('/maximum', 'StudentDetailsController@aggregatesMaximum');
$router->get('/minimum', 'StudentDetailsController@aggregatesManimum');
$router->get('/avarage', 'StudentDetailsController@aggregatesAverage');
$router->get('/sum', 'StudentDetailsController@aggregatesSum');

