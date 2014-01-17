<?php

class __Mustache_b0bbe4bfdf3e73e20e7d5ba21083c231 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container" id="content-container">';
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