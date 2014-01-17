<?php

class __Mustache_0fa9208c2ea477faf8678f151a8a1696 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container" id="contact-container">';
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