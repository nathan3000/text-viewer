<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoLoader();

$app = new \Slim\Slim();

$app->get('/', function () use ($app) {
    $app->render('main.php');
});

$app->post('/view', function () use ($app) {
    $req = $app->request();

    $text = $req->post('text');
    $text = str_replace ( "\r\n\r\n", "</p><p>", $text );
    $text = str_replace ( ". ", ".<br />", $text );
    $text = str_replace ( ", ", ",<br />&nbsp;&nbsp;&nbsp;&nbsp;", $text );

    if($req->post('rule-sentence-newline') !== null) {
        // ..
    }   

    if($req->post('rule-semicolon-newline-tab') !== null) {
        // ..
    }   

    if($req->post('rule-colon-newline-tab') !== null) {
        // ..
    }

    if($req->post('rule-comma-newline-tab') !== null) {
        // ..
    }

    $app->render('view.php', array('text' => $text));
});

$app->run();
