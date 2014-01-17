<?php

class __Mustache_8df14537a135ce01ed75f42da4e87f40 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= "\n";
        $buffer .= $indent . '<meta charset="utf-8">';
        $buffer .= "\n";
        $buffer .= $indent . '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
        $buffer .= "\n";
        $buffer .= $indent . '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        $buffer .= "\n";
        $buffer .= $indent . '<meta name="author" content="miket3@optonline.net">';
        $buffer .= "\n";
        $buffer .= $indent . '<meta name="robots" content="FOLLOW">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<base href="';
        $value = $context->find('base_url');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" />';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<link rel="shortcut icon" href="assets/images/thumanns-logo.ico">';
        $buffer .= "\n";
        $buffer .= $indent . '<link rel="canonical" href="http://www.buddyboyprovisions.com" />';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Bootstrap core CSS -->';
        $buffer .= "\n";
        $buffer .= $indent . '<link href="';
        $value = $context->find('base_url');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= 'assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Just for debugging purposes. Don\'t actually copy this line! -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!--[if lt IE 9]>';
        $buffer .= "\n";
        $buffer .= $indent . '  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<![endif]-->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Custom styles for this template -->';
        $buffer .= "\n";
        $buffer .= $indent . '<link href="';
        $value = $context->find('base_url');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= 'assets/css/custom.css" rel="stylesheet">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Google Analytics  START-->';
        $buffer .= "\n";
        $buffer .= $indent . '<script>';
        $buffer .= "\n";
        $buffer .= $indent . '  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){';
        $buffer .= "\n";
        $buffer .= $indent . '  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),';
        $buffer .= "\n";
        $buffer .= $indent . '  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)';
        $buffer .= "\n";
        $buffer .= $indent . '  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '  ga(\'create\', \'UA-47168910-1\', \'buddyboyprovisions.com\');';
        $buffer .= "\n";
        $buffer .= $indent . '  ga(\'send\', \'pageview\');';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Google Analytics  END -->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<!-- AddThis Smart Layers BEGIN -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Go to http://www.addthis.com/get/smart-layers to customize -->';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52d5d1243b8270c1"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '<script type="text/javascript">';
        $buffer .= "\n";
        $buffer .= $indent . '	addthis.layers({';
        $buffer .= "\n";
        $buffer .= $indent . '		\'theme\': \'transparent\',';
        $buffer .= "\n";
        $buffer .= $indent . '		\'share\': {';
        $buffer .= "\n";
        $buffer .= $indent . '			\'position\': \'left\',';
        $buffer .= "\n";
        $buffer .= $indent . '			\'numPreferredServices\': 5';
        $buffer .= "\n";
        $buffer .= $indent . '		},';
        $buffer .= "\n";
        $buffer .= $indent . '		\'follow\': {';
        $buffer .= "\n";
        $buffer .= $indent . '			\'services\': [';
        $buffer .= "\n";
        $buffer .= $indent . '				{\'service\': \'facebook\', \'id\': \'buddyboy2011\'},';
        $buffer .= "\n";
        $buffer .= $indent . '				{\'service\': \'twitter\', \'id\': \'BuddyBoyPro\'},';
        $buffer .= "\n";
        $buffer .= $indent . '				{\'service\': \'linkedin\', \'id\': \'http://www.linkedin.com/pub/mike-trotta/23/0/580\'},';
        $buffer .= "\n";
        $buffer .= $indent . '				{\'service\': \'google_follow\', \'id\': \'/114430995326172415867\'}';
        $buffer .= "\n";
        $buffer .= $indent . '			]';
        $buffer .= "\n";
        $buffer .= $indent . '		},';
        $buffer .= "\n";
        $buffer .= $indent . '		\'whatsnext\': {},';
        $buffer .= "\n";
        $buffer .= $indent . '		\'recommended\': {}';
        $buffer .= "\n";
        $buffer .= $indent . '	});';
        $buffer .= "\n";
        $buffer .= $indent . '</script>';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- AddThis Smart Layers END -->';
        $buffer .= "\n";
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}