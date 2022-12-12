<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    public function test_example()
    {
        $result = validate_email("admin@email.com");
        $this->assertTrue($result);

        $result = validate_email("admin@@email.com");
        $this->assertFalse($result);
    }
}
