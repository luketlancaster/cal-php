<?php
/* Zeller's Congruence Rules:
 * h = day of week (0 = Saturday)
 * q = day of month
 * m = month (4 = April)
 * Y = year
*/


class Day
{

    private $_year;
    private $_day_of_month;
    private $_month;

    public function __construct($year, $month)
    {
        $this->_year = $year;
        $this->_day_of_week = 1;
        $this->_month = $month;
    }

    public function day_of_week()
    {
        $number = $this->_zellers() % 7;
        if ($number != 0) {
            $number = $number -1;
        } else {
            $number = 6;
        }
        return $number;

    }

    private function _zellers()
    {
        $q = 1;
        $m = $this->_month;
        $Y = $this->_year;

        if ($m < 3) {
            $Y -= 1;
            $m += 12;
        }

        $h = ($q + floor(((($m + 1)* 26) / 10)) + $Y + floor($Y/4) + (6 * floor($Y/100)) + floor($Y/400)  );
        return $h;
    }
}
