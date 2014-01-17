<?php

class __Mustache_1c1b00b72e80681d84a2d6dc00b94b5a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $value = $context->find('host');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= "\n";
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