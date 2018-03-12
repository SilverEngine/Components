<?php

namespace Silver\Components\Crypto;

use Silver\Components\Crypto\Blueprints\CryptoInterface;

class Crypto implements CryptoInterface
{

    public function encode($string, $password = null, $chiper = null)
    {
        //Use ENV password if other is not set by an argument.
        if (is_null($password)) {
            $password = Env::get('app_key');
        }
        //Use default AES-256-ECB if no other chiper is specified
        if (is_null($chiper)) {
            $chiper = "AES-256-ECB";
        }
        return base64_encode(openssl_encrypt($string, $chiper, $password));
    }

    public function encodeArray($string = [], $password = null, $chiper = null)
    {
        //Use ENV password if other is not set by an argument.
        if (is_null($password)) {
            $password = Env::get('app_key');
        }
        //Use default AES-256-ECB if no other chiper is specified
        if (is_null($chiper)) {
            $chiper = "AES-256-ECB";
        }
        return base64_encode(openssl_encrypt(json_encode($string), $chiper, $password));
    }


    public function decode($hash, $password = null, $chiper = null)
    {
        //Use ENV password if other is not set by an argument.
        if (is_null($password)) {
            $password = Env::get('app_key');
        }
        //Use default AES-256-ECB if no other chiper is specified
        if (is_null($chiper)) {
            $chiper = "AES-256-ECB";
        }
        return openssl_decrypt(base64_decode($hash), $chiper, $password);
    }

    public function decodeArray($hash, $password = null, $chiper = null)
    {
        //Use ENV password if other is not set by an argument.
        if (is_null($password)) {
            $password = Env::get('app_key');
        }
        //Use default AES-256-ECB if no other chiper is specified
        if (is_null($chiper)) {
            $chiper = "AES-256-ECB";
        }
        $decode = openssl_decrypt(base64_decode($hash), $chiper, $password);
        return json_decode($decode);
    }


    public function makePassword($len = 16, $chars_type = 1)
    {
        $password = array();
        //Default use all chars 0-9,a-z,A-Z,special chars
        if ($chars_type == 1) {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!#$%&()=?*+{}@';
        } else if ($chars_type == 2) {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        } else if ($chars_type == 3) {
            $alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } else if ($chars_type == 4) {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        } else if ($chars_type == 5) {
            $alphabet = '1234567890';
        }
        for ($i = 0; $i < $len; $i++) {
            $n = rand(0, strlen($alphabet) - 1);
            $password[] = $alphabet[$n];
        }
        return implode($password);
    }


    public function makeHash($password, $alg = null)
    {
        //At default we use password_hash which use bcrypt algorithm.
        if ($alg == null) {
            $options = [
                'salt' => $this->makePassword(30),
                'cost' => 10
            ];
            $hash = password_hash($password, PASSWORD_DEFAULT, $options);
        } else {
            //If alg is set then we use hash function
            //TODO: with alg not working alwys false  make user frendly  with algoritem
            $hash = hash($alg, $password);
        }
        return $hash;
    }


    public function verifyHash($password, $hash)
    {
        if (password_verify($password, $hash)) {
            return true;
        } else {
            return false;
        }
    }
}