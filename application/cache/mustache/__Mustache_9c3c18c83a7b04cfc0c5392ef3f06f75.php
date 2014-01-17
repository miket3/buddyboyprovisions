<?php

class __Mustache_9c3c18c83a7b04cfc0c5392ef3f06f75 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= "\n";
        $buffer .= $indent . '		<meta charset="utf-8">';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta name="author" content="miket3@optonline.net">';
        $buffer .= "\n";
        $buffer .= $indent . '		';
        $buffer .= "\n";
        $buffer .= $indent . '		<link rel="shortcut icon" href="assets/images/thumanns-logo.ico">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- Bootstrap core CSS -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- Just for debugging purposes. Don\'t actually copy this line! -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<!--[if lt IE 9]>';
        $buffer .= "\n";
        $buffer .= $indent . '		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '		<![endif]-->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- Custom styles for this template -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<link href="assets/css/carousel.css" rel="stylesheet">';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}