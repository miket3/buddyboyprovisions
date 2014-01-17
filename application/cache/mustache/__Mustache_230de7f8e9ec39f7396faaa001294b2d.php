<?php

class __Mustache_230de7f8e9ec39f7396faaa001294b2d extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '', $escape = false)
    {
        $buffer = '';

        $buffer .= $indent . '<div class="container" id="contact-container">';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '		<form id="contact-form" class="form-signin" role="form" method="post" action="contact_form_post.php">';
        $buffer .= "\n";
        $buffer .= $indent . '			<h2 class="form-signin-heading">Email Us</h2>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label>Your Name</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="text" class="form-control" name="name" placeholder="Name" required autofocus>';
        $buffer .= "\n";
        $buffer .= $indent . '<br>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label>Your E-mail</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<input type="text" class="form-control" name="email" placeholder="Email" required>';
        $buffer .= "\n";
        $buffer .= $indent . '<br>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label>Subject</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<select class="form-control" id="subject" name="subject" required>';
        $buffer .= "\n";
        $buffer .= $indent . '				<option selected value="na">';
        $buffer .= "\n";
        $buffer .= $indent . '					Choose One:';
        $buffer .= "\n";
        $buffer .= $indent . '				</option>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '				<option value="service">';
        $buffer .= "\n";
        $buffer .= $indent . '					General Customer Service';
        $buffer .= "\n";
        $buffer .= $indent . '				</option>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '				<option value="suggestions">';
        $buffer .= "\n";
        $buffer .= $indent . '					Suggestions';
        $buffer .= "\n";
        $buffer .= $indent . '				</option>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '				<option value="product">';
        $buffer .= "\n";
        $buffer .= $indent . '					Product Support';
        $buffer .= "\n";
        $buffer .= $indent . '				</option>';
        $buffer .= "\n";
        $buffer .= $indent . '			</select>';
        $buffer .= "\n";
        $buffer .= $indent . '<br>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label>Message</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<textarea name="message" id="message" class="form-control" rows="4" required></textarea>';
        $buffer .= "\n";
        $buffer .= $indent . '<br>';
        $buffer .= "\n";
        $buffer .= $indent . '			<label>Human Verification</label>';
        $buffer .= "\n";
        $buffer .= $indent . '			<?php echo $sweetcaptcha->get_html() ?>';
        $buffer .= "\n";
        $buffer .= $indent . '<br>';
        $buffer .= "\n";
        $buffer .= $indent . '			<button class="btn btn-lg btn-primary btn-block" type="submit">Send It</button>';
        $buffer .= "\n";
        $buffer .= $indent . '		</form>';
        $buffer .= "\n";
        $buffer .= "\n";
        $buffer .= $indent . '	</div> <!-- /container -->';
        $buffer .= "\n";

        if ($escape) {
            return call_user_func($this->mustache->getEscape(), $buffer);
        } else {
            return $buffer;
        }
    }

}