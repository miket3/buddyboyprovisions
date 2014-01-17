<?php

class __Mustache_7020a7411c922e7a5e21baba88fabe8a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="xcontainer" id="content-container">';
        $buffer .= "\n";
        $buffer .= $indent . '	<p>Turkey Products<p>';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}