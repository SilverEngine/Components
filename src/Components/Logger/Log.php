<?php
namespace Silver\Components\Logger;

/**
 * SilverEngine  - PHP MVC framework
 *
 * @package   SilverEngine
 * @author    SilverEngine Team
 * @copyright 2015-2017
 * @license   MIT
 * @link      https://github.com/SilverEngine/Framework
 */

class Log
{

    private static $types = [
        'info',
        'ok',
        'warning',
        'error',
        'api',
        'db',
        'start',
        'end',
        'debug',
        'normal',
        'danger',
        'aboard',
        'finish',
        'url',
    ];


    protected $logger;

    public function __construct($driver)
    {

        $this->logger = (new LogDriver($driver))->driver();
    }

    public function __call($method, $args)
    {
        if(array_search($method, self::$types) === false) {
            throw new \Exception("Undefined method Log::$method try allowed types [ ". implode(', ', self::$types)." ]");
        }
        $this->create($args[0], $method);
    }

    /**
     * @param $message
     * @param $type
     **/

    public function create($message, $type)
    {

       $this->logger->save($message,$type);

    }
}
