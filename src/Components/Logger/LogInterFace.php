<?php

/**
 * SilverEngine  - PHP MVC framework
 *
 * @package   SilverEngine
 * @author    SilverEngine Team
 * @copyright 2015-2017
 * @license   MIT
 * @link      https://github.com/SilverEngine/Framework
 */

namespace Silver\Components\Logger;


interface LogInterFace
{

    /**
     * @param $message
     * @param $type
     *
     **/

    public function save($message, $type);

}
