<?php

class __Mustache_6ecbdf4b5e0886f9dea648104f0b9b3d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="xcontainer" id="content-container">';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>Turkey Products - UNDER CONSTRUCTION<p>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}