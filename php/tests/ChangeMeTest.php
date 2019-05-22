<?php

use PHPUnit\Framework\TestCase;


class ChangeMeTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testSomething()
    {
        $this->assertEquals(false, (new ChangeMe())->something());
    }
}
