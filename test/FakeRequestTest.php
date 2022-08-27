<?php

namespace Romanm87\App;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class FakeRequestTest extends TestCase
{

    public function testGetClassName() {
        $class = new FakeRequest();
        Assert::assertNotEmpty($class->getClassName());
    }
}
