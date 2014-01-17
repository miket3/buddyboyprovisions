<?php

class __Mustache_ef2e8cbd9f81465b884b13aa49d603d6 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '		<!-- Carousel	================================================== -->';
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
        $buffer .= $indent . '				<li data-target="#myCarousel" data-slide-to="3"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '				<li data-target="#myCarousel" data-slide-to="4"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '			</ol>';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="carousel-inner">';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item active">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-turkey-sandwich.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Sandwich">';
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
        $buffer .= ' Sandwich</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-platter.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Platter">';
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
        $buffer .= ' Platter</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-pastrami.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Pastrami">';
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
        $buffer .= ' Pastrami</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-wrap-platter.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Wraps">';
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
        $buffer .= ' Wraps</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="item">';
        $buffer .= "\n";
        $buffer .= $indent . '					<img src="assets/images/thumanns-hot-dogs.jpg" alt="';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' Hot Dogs">';
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
        $buffer .= ' Hot Dogs</h2>';
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