<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Description of Base
 *
 * @author Mike Trotta
 */
class View_Base extends View
{
    public $CompanyName = 'Buddy Boy Provisions';
	public $Mfg = "Thumann's";
	public $CompanyStreet1;
	public $CompanyStreet2;
	public $CompanyCity="Wanaque";
	public $CompanyState="NJ";
	public $CompanyZip="07465";
	public $CompanyPhone="973-865-1129";
	public $content;
	public $foot;
	public $navigation;
	public $carousel;
	public $marketing;
    public function testing($tester="empty")
    {
        return $tester;
    }
}