<?php

class __Mustache_04d9966b329d10475c6d562b384034fe extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="marketing container" id="content-container">';
        $buffer .= "\n";
        $buffer .= $indent . '	Turkey Products';
        $buffer .= "\n";
        $buffer .= $indent . '	</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}