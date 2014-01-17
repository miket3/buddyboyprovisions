<?php

class __Mustache_e04c67faaa24a4fe01f99ac13cef0738 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>';
        $buffer .= "\n";
        $buffer .= $indent . '<html lang="en">';
        $buffer .= "\n";
        $buffer .= $indent . '<head>';
        $buffer .= "\n";
        $buffer .= $indent . '    <meta charset="utf-8" />';
        $buffer .= "\n";
        $buffer .= $indent . '    <title>';
        $value = $context->find('title');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</title>';
        $buffer .= "\n";
        $buffer .= $indent . '</head>';
        $buffer .= "\n";
        $buffer .= $indent . '<body>';
        $buffer .= "\n";
        $buffer .= $indent . '    <h1>';
        $value = $context->find('tester');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</h1>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '    <p>';
        $buffer .= "\n";
        $buffer .= $indent . '    ';
        $buffer .= "\n";
        $buffer .= $indent . '    </p>';
        $buffer .= "\n";
        $buffer .= $indent . '</body>';
        $buffer .= "\n";
        $buffer .= $indent . '</html>';
        $buffer .= "\n";
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}