<?php
session_cache_limiter(false);
session_start();

require 'Slim/Slim.php';
\Slim\Slim::registerAutoLoader();

define("TAB", "&nbsp;&nbsp;&nbsp;&nbsp;");
define("NEWLINE", "<br />");


$app = new \Slim\Slim();
$app->get('/', function () use ($app) { 
    $flash = $app->view()->getData('flash');

    $app->render('main.php', array('error' => $flash['error'])); 
});

$app->post('/view', function () use ($app) {
    $req = $app->request();

    $text = $req->post('text');

    if(!$text) {
        $app->flash('error', 'Some text to display would be helpful!');
        $app->redirect('index.php');
    }


    $rules = $req->post('rules');

    $rules = array_filter($rules);

   // $rules_string = "newline after sentence|newline and tab after comma";
   // $rules = explode("|", $rules_string);

    $after = false;

    $valid_format_tokens = array( "newline", "new-line", "tab" );
    $hash_format_tokens = array( "newline" => NEWLINE, "new-line" => NEWLINE, "tab" => TAB );
    $valid_character_tokens = array( ".", ",", ";", ":", "full-stop", "sentence", "comma", "semi-colon", "colon" );
    $hash_character_tokens = array( "sentence" => ". ", "." => ". ", "full-stop" => ". ", "comma" => ",", "," => ",", "semi-colon" => ";", ";" => ";", "colon" => ":", ":" => ":");
    
    foreach($rules as &$rule) {
        $format_tokens = array();
        $character_tokens = array();

        $tokens = explode(" ", $rule);

        foreach ($tokens as &$token) {
            if(in_array($token, $valid_format_tokens)) {
                $format_tokens[] = $token; 
            } else if($token == "after") {
                $after = true;
            } else if(in_array($token, $valid_character_tokens)) {
                $character_tokens[] = $token;
            }
        }

        $format_token_string = "";

        foreach ($format_tokens as &$format_token) {
            $format_html = $hash_format_tokens[$format_token];  
            $format_token_string = $format_token_string . $format_html; 
        }

        if($after) {
            $format_token_string = $hash_character_tokens[$character_tokens[0]].$format_token_string;
        } else {
            $format_token_string = $format_token_string.$hash_character_tokens[$character_tokens[0]];
        }

        $text = str_replace ( $hash_character_tokens[$character_tokens[0]], $format_token_string, $text); 
        
    }
    // Convert newlines to paragraphs
    $text = str_replace ( "\r\n\r\n", "</p><p>", $text );

    // Newlines after end of sentence.
    // $text = str_replace ( ".", ".".NEWLINE, $text );

    // Newline and tab after comma
    // $text = str_replace ( ", ", ",".NEWLINE.TAB, $text );

    // Newline and tab after semi-colon 
    // $text = str_replace ( "; ", ";".NEWLINE.TAB, $text );

    // Newline and tab after colon
    // $text = str_replace ( ": ", ":".NEWLINE.TAB, $text );

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
