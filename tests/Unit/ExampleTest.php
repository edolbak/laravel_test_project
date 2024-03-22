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
    public function test_example()
    {
        $this->assertTrue(true);
    }


    /**
     * @dataProvider someDataProvider
     * @return void
     */
    public function test_example3($data)
    {
        $rrr = 111;

        $this->assertEquals($data, $rrr);
    }

    public function someDataProvider()
    {
        return [
            [333],[222],[111]
        ];
    }
}
