<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;
use App\Helpers\Email;

class EmailTest extends TestCase
{

    public function test_example()
    {
        $email = "admin@email.com";
        $result = Email::validate($email);
        $this->assertTrue(true);
    }
}
