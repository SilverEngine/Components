<?php

namespace Silver\Components\Crypto\Blueprints;

interface CryptoInterface
{
    public function encode($string, $password = null, $chiper = null);

    public function decode($hash, $password = null, $chiper = null);

    public function encodeArray($string = [], $password = null, $chiper = null);

    public function decodeArray($hash, $password = null, $chiper = null);

    public function makePassword($len, $chars_type);

    public function makeHash($password, $alg = null);

    public function verifyHash($password, $hash);
}