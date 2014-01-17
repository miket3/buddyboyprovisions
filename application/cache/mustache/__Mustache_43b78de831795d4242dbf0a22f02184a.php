<?php

class __Mustache_43b78de831795d4242dbf0a22f02184a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '		<!-- Carousel';
        $buffer .= "\n";
        $buffer .= $indent . '		================================================== -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div id="myCarousel" class="carousel slide" data-ride="carousel">';
        $buffer .= "\n";
        $buffer .= $indent . '			<!-- Indicators -->';
        $buffer .= "\n";
        $buffer .= $indent . '			<ol class="carousel-indicators">';
        $buffer .= "\n";
        $buffer .= $indent . '				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				<li data-target="#myCarousel" data-slide-to="1"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				<li data-target="#myCarousel" data-slide-to="2"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '			</ol>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="carousel-inner">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item active">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-meat-slide1.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Bologna">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="carousel-caption">';
        $buffer .= "\n";
        $buffer .= $indent . '							<h2>';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Bologna</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-gourmet-turkey.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Turkey">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="carousel-caption">';
        $buffer .= "\n";
        $buffer .= $indent . '							<h2>';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Turkey</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-cheese-thumb.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Cheese">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="carousel-caption">';
        $buffer .= "\n";
        $buffer .= $indent . '							<h2>';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Cheese</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>';
        $buffer .= "\n";
        $buffer .= $indent . '			<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.carousel -->';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}