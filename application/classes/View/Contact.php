<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Description of Head
 *
 * @author Mike Trotta
 */
class View_Contact extends View_Base {

	public function sweetcaptcha() {
		$sweetcaptcha = new Sweetcaptcha(
				SWEETCAPTCHA_APP_ID, SWEETCAPTCHA_KEY, SWEETCAPTCHA_SECRET, SWEETCAPTCHA_PUBLIC_URL
		);
		return $sweetcaptcha->get_html();
	}

}
