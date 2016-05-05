<?php

require 'lib/Month.php';

class MonthTest extends PHPUnit_Framework_TestCase
{
    public function testJanuary2016()
    {
        $m = new Month(1, 2016);
        $actual = <<<EOD
    January 2016
Su Mo Tu We Th Fr Sa
                1  2
 3  4  5  6  7  8  9
10 11 12 13 14 15 16
17 18 19 20 21 22 23
24 25 26 27 28 29 30
31
EOD;
        $this->assertEquals($actual, $m->to_string());
    }

    public function testFebruary2016_leap()
    {
        $m = new Month(2, 2016);
        $actual = <<<EOD
   February 2016
Su Mo Tu We Th Fr Sa
    1  2  3  4  5  6
 7  8  9 10 11 12 13
14 15 16 17 18 19 20
21 22 23 24 25 26 27
28 29

EOD;
        $this->assertEquals($actual, $m->to_string());
    }

    public function testFebruary2015_non_leap()
    {
        $m = new Month(2, 2015);
        $actual = <<<EOD
   February 2015
Su Mo Tu We Th Fr Sa
 1  2  3  4  5  6  7
 8  9 10 11 12 13 14
15 16 17 18 19 20 21
22 23 24 25 26 27 28

EOD;
        $this->assertEquals($actual, $m->to_string());
    }

    public function test30DayMonth()
    {
        $m = new Month(4, 2016);
        $actual = <<<EOD
     April 2016
Su Mo Tu We Th Fr Sa
                1  2
 3  4  5  6  7  8  9
10 11 12 13 14 15 16
17 18 19 20 21 22 23
24 25 26 27 28 29 30

EOD;
        $this->assertEquals($actual, $m->to_string());
    }

    public function testDecember1996()
    {
        $m = new Month(12, 1996);
        $actual = <<<EOD
   December 1996
Su Mo Tu We Th Fr Sa
 1  2  3  4  5  6  7
 8  9 10 11 12 13 14
15 16 17 18 19 20 21
22 23 24 25 26 27 28
29 30 31

EOD;
        $this->assertEquals($actual, $m->to_string());
    }

    public function testMarch1987ItsMyBirthday()
    {
        $m = new Month(12, 1996);
        $actual = <<<EOD
     March 1987
Su Mo Tu We Th Fr Sa
 1  2  3  4  5  6  7
 8  9 10 11 12 13 14
15 16 17 18 19 20 21
22 23 24 25 26 27 28
29 30 31

EOD;
        $this->assertEquals($actual, $m->to_string());
    }

}

