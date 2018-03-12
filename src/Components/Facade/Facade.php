<?php

namespace Silver\Components\Facade;

use Silver\Components\Facade\Blueprints\FacadeInterface;

class Facade implements FacadeInterface
{
    private static $object = [];

    public static function __callStatic($facadeName, $args)
    {
        $child = get_called_class();

        $class = $child::getClass();
        $object = null;

        if (isset(self::$object[$class])) {
            $object = self::$object[$class];
        } else {
            $object = self::$object[$class] = new $class;
        }

        return call_user_func_array(array($object, $facadeName), $args);
    }
}