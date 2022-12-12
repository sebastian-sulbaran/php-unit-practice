<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{

    public function test_example()
    {
        $result = Email::validate("admin@email.com");
        $this->assertTrue($result); //when its ok

        $result = Email::validate("admin@@email.com");
        $this->assertFalse($result); //when its not ok
    }
}
