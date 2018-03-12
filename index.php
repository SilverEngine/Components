<?php

require_once  'vendor/autoload.php';
require_once 'src/Components/Facade/Blueprints/FacadeInterface.php';
require_once 'src/Components/Facade/Facade.php';

require_once 'src/Components/Crypto/Blueprints/CryptoInterface.php';
require_once 'src/Components/Crypto/Crypto.php';

//use \Silver\Components\Facade\Facade;
//class User extends Facade
//{
//    protected static function getClass()
//    {
//        return 'App\Helpers\User';
//    }
//}

$ctypto = new \Silver\Components\Crypto\Crypto();

//var_dump($ctypto->encode('test-----------','j4k5l2kjh5'));
//
//print_r($ctypto->decode('YVAxYzJaYzBVNXBWak91aUwxM05BQT09','j4k5l2kjh5'));
//
//
//var_dump($ctypto->encodeArray(['mama' => 1, 'tata' => ['dva' => 1]],'435425'));
//
//print_r($ctypto->decodeArray('NEtTdjdTWjRUa1pkUXR3NU54dWNtNHhPUnBuL1gzdjFXck54SmR2S3hvVT0','435425'));
//

//var_dump($ctypto->makePassword());
//var_dump($ctypto->makeHash('k2345jl52'));
//var_dump($ctypto->verifyHash('k2345jl52', '$2y$10$RFNQaEJXJCt6VWNDWFF7ROaSLT/kkF9FTbTJObXc7g.n8Fz.BptsS'));

//var_dump($ctypto->makeHash('k2', 'sha256'));
//var_dump($ctypto->verifyHash('k2', '015f7e6bc5aeaf483724089e9252cc13b50951a6b69412522765cff4d780306e'));

$crypt = \Silver\Components\Crypto\Crypto::makePassword();
var_dump($crypt);