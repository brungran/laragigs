<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_that_true_is_true()
    {
        $this->assertTrue(true);
    }

    /**
     * Test if string1 and string2 are the same.
     *
     * @return void
     */
    public function test_that_string_match()
    {
        $string1 = 'testString1';
        $string2 = 'testString2';

        $this->assertSame($string1, $string2);
    }
}
