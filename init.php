<?php defined('SYSPATH') or die('No direct script access.');

if (Kohana::$config->load('SwiftMailer')->get('autoload'))
{
	SwiftMailer::init();
}
