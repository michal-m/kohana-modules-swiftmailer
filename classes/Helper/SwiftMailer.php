<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Extension of the Kohana URL helper class.
 *
 * @package     SwiftMailer
 * @category    Helpers
 * @author      Michał Musiał
 * @copyright   (c) 2012 Michał Musiał
 */
class Helper_SwiftMailer
{
    public static function init()
    {
        require Kohana::find_file('vendor', 'Swift-4.2.2' . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR . 'swift_required', 'php');
    }
}
