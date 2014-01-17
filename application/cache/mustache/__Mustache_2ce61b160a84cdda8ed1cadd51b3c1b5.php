<?php

class __Mustache_2ce61b160a84cdda8ed1cadd51b3c1b5 extends Mustache_Template
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
        $value = $context->find('host');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= $indent . call_user_func($this->mustache->getEscape(), $value);
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}