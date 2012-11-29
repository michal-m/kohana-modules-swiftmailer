<?php defined('SYSPATH') or die('No direct script access.');

if (Kohana::$config->load('swiftmailer')->get('autoload'))
{
	SwiftMailer::init();
}
