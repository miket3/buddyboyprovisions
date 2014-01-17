<?php

class __Mustache_0b5740fe4355081ea4ed17c8c6b0f667 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('Carousel')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        if ($partial = $this->mustache->loadPartial('Marketing')) {
            $buffer .= $partial->renderInternal($context, '	');
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}