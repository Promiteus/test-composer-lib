<?php

namespace Romanm87\App;

/**
 * Class FakeRequest
 * @package Romanm87\App
 */
class FakeRequest
{
    public function __construct()
    {
    }

    final public function getClassName(): string {
        return __CLASS__;
    }
}