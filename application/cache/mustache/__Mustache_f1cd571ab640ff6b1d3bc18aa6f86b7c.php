<?php

class __Mustache_f1cd571ab640ff6b1d3bc18aa6f86b7c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<!-- Marketing messaging and featurettes';
        $buffer .= "\n";
        $buffer .= $indent . '================================================== -->';
        $buffer .= "\n";
        $buffer .= $indent . '<!-- Wrap the rest of the page in another container to center all the content. -->';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '<div class="container marketing">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	<!-- Three columns of text below the carousel -->';
        $buffer .= "\n";
        $buffer .= $indent . '	<div class="row">';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-lg-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<img class="img-circle" src="assets/images/thumanns-50-yr-logo.jpg" alt="Thumann\'s Logo">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>Welcome</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $value = $context->find('CompanyName');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' is a top class distributor and offers the complete line of <b>Boar\'s Head</b> products for every kind of food establishment: Deli\'s, Markets, Diners, Restaurants, Schools, Hospitals, Corporate cafeterias. First Choice Provisions provides marketing support and training support for all of our clients to promote their commitment to quality. Contact us today for details and pricing.</p>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.col-lg-4 -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-lg-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<img class="img-circle" src="assets/images/thumanns-toy-truck.jpg" alt="Thumann\'s Truck">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>About Us</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $value = $context->find('CompanyName');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' has been a Boar\'s Head brand distributor for over 10 years. We know that “Quality Matters”. Using better ingredients translates into a better product. We work with our clients to ensure customer satisfaction. A happy customer is a returning customer. Contact us and see how we can assist in elevating you to the next level of service, taste, and quality.</p>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.col-lg-4 -->';
        $buffer .= "\n";
        $buffer .= $indent . '		<div class="col-lg-4">';
        $buffer .= "\n";
        $buffer .= $indent . '			<img class="img-circle" src="assets/images/thumanns-history.jpg" alt="Thumann\'s Historical Image">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h1>Boar\'s Head</h1>';
        $buffer .= "\n";
        $buffer .= $indent . '			<p>';
        $value = $context->find('Mfg');
        if (!is_string($value) && is_callable($value)) {
            $value = $this->mustache
                ->loadLambda((string) call_user_func($value))
                ->renderInternal($context, $indent);
        }
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= ' is the name you can trust and is a five generation family owned business. Our company began with the belief that consumers deserved a better quality ham than what was available. Over the years, our company has grown. But, our standards for quality have never waved - a value passed down from one family member to the next. As a family business, we choose to be devoted to our consumers, not stockholders. We choose to only bring to market products that we believe in, products that meet the standards set for us long ago. </p>';
        $buffer .= "\n";
        $buffer .= $indent . '		</div><!-- /.col-lg-4 -->';
        $buffer .= "\n";
        $buffer .= $indent . '	</div><!-- /.row -->';
        $buffer .= "\n";
        $buffer .= $indent . '</div>';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}