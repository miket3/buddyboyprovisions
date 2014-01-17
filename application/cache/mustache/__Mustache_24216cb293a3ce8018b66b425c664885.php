<?php

class __Mustache_24216cb293a3ce8018b66b425c664885 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '			<!-- FOOTER -->';
        $buffer .= "\n";
        $buffer .= $indent . '			<footer>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p class="pull-right"><a href="#">Back to top</a></p>';
        $buffer .= "\n";
        $buffer .= $indent . '				<p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>';
        $buffer .= "\n";
        $buffer .= $indent . '			</footer>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}