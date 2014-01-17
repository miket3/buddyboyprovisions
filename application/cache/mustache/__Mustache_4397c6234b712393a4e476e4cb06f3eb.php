<?php

class __Mustache_4397c6234b712393a4e476e4cb06f3eb extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '		<div class="navbar-wrapper">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="container">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '				<div class="navbar navbar-inverse navbar-static-top" role="navigation">';
        $buffer .= "\n";
        $buffer .= $indent . '					<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="navbar-header">';
        $buffer .= "\n";
        $buffer .= $indent . '							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="sr-only">Toggle navigation</span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="icon-bar"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="icon-bar"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span class="icon-bar"></span>';
        $buffer .= "\n";
        $buffer .= $indent . '							</button>';
        $buffer .= "\n";
        $buffer .= $indent . '							<div itemscope itemtype="http://schema.org/Organization" class="navbar-brand" id="head-company">';
        $buffer .= "\n";
        $buffer .= $indent . '								<div id= "head-company-name" itemprop="name">';
        $value = $context->find('CompanyName');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '<br></div>';
        $buffer .= "\n";
        $buffer .= $indent . '								<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" id="head-address"> ';
        $buffer .= "\n";
        $buffer .= $indent . '									<span itemprop="addressLocality">';
        $value = $context->find('CompanyCity');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span>, ';
        $buffer .= "\n";
        $buffer .= $indent . '									<span itemprop="addressRegion">';
        $value = $context->find('CompanyState');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</span></span><br>';
        $buffer .= "\n";
        $buffer .= $indent . '									<span id="head-phone"><a id="phone" href="tel:';
        $value = $context->find('CompanyPhone');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" class="btn btn-primary btn-info" itemprop="telephone">';
        $buffer .= "\n";
        $buffer .= $indent . '											<span class="glyphicon glyphicon-earphone"></span> ';
        $value = $context->find('CompanyPhone');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '</a></span></div>';
        $buffer .= "\n";
        $buffer .= $indent . '	';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '						<div class="navbar-collapse collapse">';
        $buffer .= "\n";
        $buffer .= $indent . '							<ul class="nav navbar-nav">';
        $buffer .= "\n";
        $buffer .= $indent . '								<li class="active"><a href="home">Home</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '								<li><a href="contact">Email Us</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '								<li class="dropdown">';
        $buffer .= "\n";
        $buffer .= $indent . '									<a href="products" class="dropdown-toggle " data-toggle="dropdown">Products <b class="caret"></b></a>';
        $buffer .= "\n";
        $buffer .= $indent . '									<ul class="dropdown-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="products/turkey">Turkey</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Ham</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Beef</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Bologna</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Cheese</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Salads</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li class="divider"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li class="dropdown-header">Nav header</li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="thumanns-vs-boars-head">vs Boar\'s Head</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">One more separated link</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '									</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '								</li>';
        $buffer .= "\n";
        $buffer .= $indent . '							</ul>';
        $buffer .= "\n";
        $buffer .= $indent . '						</div>';
        $buffer .= "\n";
        $buffer .= $indent . '					</div>';
        $buffer .= "\n";
        $buffer .= $indent . '				</div>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '			</div>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div>';

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}