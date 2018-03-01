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



class LogToFile implements LogInterFace {



    /**
     * @param $message
     * @param $type
     *
     **/

    public function save($message, $type)
    {
        var_dump("Log To File");

    	$this->create($message,$type);

    }

    private function create($message, $type)
    {
        define("ROOT",getcwd().'/'); // remove this later;

       // $ip   = $_SERVER["REMOTE_ADDR"];// uncomment this later
        $ip = '12.2.2.2';

        $path = ROOT . "Storage/Logs/" . date("Y-m-d") . ".log";

        $fp = fopen($path, "a+");

        $line = "[".date("Y-m-d H:i:s")."][ ".$type ." ]\t$ip\t$message\r\n";

        if($fp) {
            fwrite($fp, $line);
            fclose($fp);
            return false;
        } else {
            throw new \Exception("Unable to write to file $path.");
        }
    }

}
