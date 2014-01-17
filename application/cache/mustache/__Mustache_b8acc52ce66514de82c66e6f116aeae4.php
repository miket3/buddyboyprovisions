<?php

class __Mustache_b8acc52ce66514de82c66e6f116aeae4 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('Carousel')) {
            $buffer .= $partial->renderInternal($context, '');
        }
        if ($partial = $this->mustache->loadPartial('Marketing')) {
            $buffer .= $partial->renderInternal($context, '');
        }

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}