<?php

class __Mustache_40951717ca6e5770afbde99a585c7a72 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '		<div class="navbar-wrapper">';
        $buffer .= "\n";
        $buffer .= $indent . '			<div class="container">';
        $buffer .= "\n";
        $buffer .= $indent . '						<g:plusone size="medium" annotation="none"></g:plusone>';
        $buffer .= "\n";
        $buffer .= $indent . '						<a href="http://twitter.com/share" class="twitter-share-button" data-count="none" data-via="http://www.buddyboyprovisions.com">Tweet</a>';
        $buffer .= "\n";
        $buffer .= $indent . '<fb class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></fb>';
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
        $buffer .= $indent . '								<li class="active"><a href="index.php">Home</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '								<li><a href="index_contact.php">Email Us</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '								<li class="dropdown no-display">';
        $buffer .= "\n";
        $buffer .= $indent . '									<a href="#" class="dropdown-toggle no-disply" data-toggle="dropdown">Dropdown <b class="caret"></b></a>';
        $buffer .= "\n";
        $buffer .= $indent . '									<ul class="dropdown-menu">';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Action</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Another action</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Something else here</a></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li class="divider"></li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li class="dropdown-header">Nav header</li>';
        $buffer .= "\n";
        $buffer .= $indent . '										<li><a href="#">Separated link</a></li>';
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
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}