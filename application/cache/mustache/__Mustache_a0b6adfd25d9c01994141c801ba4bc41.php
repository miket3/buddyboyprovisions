<?php

class __Mustache_a0b6adfd25d9c01994141c801ba4bc41 extends Mustache_Template
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
        $buffer .= $indent . '							<div itemscope itemtype="http://schema.org/Organization" class="navbar-brand" id="head-company"><span  itemprop="name">First Choice<br>Provisions<br></span><span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" id="head-address"> <span itemprop="addressLocality">Manalapan</span>, <span itemprop="addressRegion">NJ</span></span><br><span id="head-phone"><a id="phone" href="tel:732-620-7694" class="btn btn-primary btn-info" itemprop="telephone"><span class="glyphicon glyphicon-earphone"></span> 732-620-7694</a></span></div>';
        $buffer .= "\n";
        $buffer .= $indent . '							';
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