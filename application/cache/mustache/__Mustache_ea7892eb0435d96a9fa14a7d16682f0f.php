<?php

class __Mustache_ea7892eb0435d96a9fa14a7d16682f0f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>';
        $buffer .= "\n";
        $buffer .= $indent . '<html lang="en">';
        $buffer .= "\n";
        $buffer .= $indent . '	<head>';
        $buffer .= "\n";
        $buffer .= $indent . '		<title>';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' | Meat | Cheese | Distributor | New Jersey | New York | Wholesale</title>';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta name="description" content="';
        $value = $context->find('CompanyName');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' - Boar\'s Head distributor serving all of New Jersey">';
        $buffer .= "\n";
        $buffer .= $indent . '		<meta name="keywords" content="boars head,meats,cheeses,distributor,New Jersey,NJ,boar\'s head,turkey,ham,chicken,roast beef">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<?php include ("head.php"); ?>';
        $buffer .= "\n";
        $buffer .= $indent . '	</head>';
        $buffer .= "\n";
        $buffer .= $indent . '	<body>';
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- NAVBAR';
        $buffer .= "\n";
        $buffer .= $indent . '	================================================== -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<?php include ("navigation.php"); ?>';
        $buffer .= "\n";
        $buffer .= $indent . '		<?php include ("carousel.php"); ?>';
        $buffer .= "\n";
        $buffer .= $indent . '		<?php include ("marketing.php"); ?>';
        $buffer .= "\n";
        $buffer .= $indent . '		<?php include ("foot.php"); ?>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- Bootstrap core JavaScript';
        $buffer .= "\n";
        $buffer .= $indent . '		================================================== -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<!-- Placed at the end of the document so the pages load faster -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '		<script src="bootstrap/dist/js/bootstrap.min.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '		<script src="bootstrap/docs-assets/js/holder.js"></script>';
        $buffer .= "\n";
        $buffer .= $indent . '	</body>';
        $buffer .= "\n";
        $buffer .= $indent . '</html>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}