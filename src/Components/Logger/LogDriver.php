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




class LogDriver
{

    protected static $drivers = [
        'system',
        'database',
        'service'
        ];

    protected $driver;

    public function __construct($driver)
    {
        if(!in_array($driver, self::$drivers)) {
            throw new \Exception("Undefined Driver: $driver try allowed Drivers [ ". implode(', ', self::$drivers)." ]");
        }

        $this->driver = $driver;
    }

public function driver()
    {

        switch ($this->driver) {
            case 'system':
                   return new LogToFile();
                break;
            case 'database':
                    return new LogToDatabase();
                break;
            case 'service':
                    return new LogToService();
                break;
            default:
                    //Error occured
                break;
        }

    }





}
