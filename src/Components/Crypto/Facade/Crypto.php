<?php

/**
 * SilverEngine  - PHP MVC framework
 *
 * @package   SilverEngine
 * @author    SilverEngine Team
 * @copyright 2015-2017
 * @license   MIT
 * @link      https://github.com/SilverEngine
 */

namespace App\Facades;

use Silver\Components\Crypto\Facade;

class Crypto extends \Silver\Components\Facade\Facade
{
    protected static function getClass()
    {
        return '\Silver\Components\Crypto\Crypto';
    }
}
