<?php

class __Mustache_acb59cd3cd3ed33e5582f2ef1f89756a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container" id="marketing-container">';
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