<?php

require 'lib/Day.php';

class DayTest extends PHPUnit_Framework_TestCase
{
    public function testSaturdayShouldBe0()
    {
        $d = new Day(2016, 10);
        $this->assertEquals(0, $d->day_of_week());
    }

    public function testSundayShouldBe1()
    {
        $d = new Day(2016, 5);
        $this->assertEquals(1, $d->day_of_week());
    }

    public function testMondayShouldBe2()
    {
        $d = new Day(2016, 2);
        $this->assertEquals(2, $d->day_of_week());
    }

    public function testTuesdayShouldBe3()
    {
        $d = new Day(2016, 3);
        $this->assertEquals(3, $d->day_of_week());
    }

    public function testWednesdayShouldBe4()
    {
        $d = new Day(2016, 6);
        $this->assertEquals(4, $d->day_of_week());
    }

    public function testThursdayShouldBe5()
    {
        $d = new Day(2016, 12);
        $this->assertEquals(5, $d->day_of_week());
    }

    public function testFridayShouldBe6()
    {
        $d = new Day(2016, 4);
        $this->assertEquals(6, $d->day_of_week());
    }

}
