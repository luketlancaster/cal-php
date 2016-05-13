<?php

require 'lib/Day.php';
require 'lib/Year.php';


class Month
{
    private $_month = null;
    private $_year = null;
    private $_start_day = null;
    private $_name = null;
    private $_weeks = null;
    private $_leap = null;
    private $_month_names = array(
                '',
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'September',
                'August',
                'October',
                'November',
                'December'
    );
    private $_month_length = array(
                '',
                31,
                28,
                31,
                30,
                31,
                30,
                31,
                31,
                30,
                31,
                30,
                31
    );
    private $_banner = "Su Mo Tu We Th Fr Sa\n";
    const WIDTH = 20;

    public function __construct($month, $year = null)
    {
        $this->_month = $month;
        $this->_year = new Year($year);
        $this->_start_day = (new Day($this->_year->to_string(), $this->_month))->day_of_week();
        $this->_leap = $this->_year->leap(); // Probably don't need?
    }

    public function to_string()
    {
        $string = $this->_return_top_two_lines();
        $days = $this->_month_length[$this->_month];
        if ($this->_month == 2 && $this->_leap) $days = 29;
        $days = range(1, $days);
        //   ADD PROPER SPACES TO BEGINNING OF DAYS ARRAY
        for ($i = 0; $i < $this->_start_day; $i++) {
            array_unshift($days, " ");
        }
// ADD SPACES BEFORE DAYS
        foreach ($days as $key => $day) {

            if ($day < 10) {
                $days[$key] = " {$day} ";
            } else {
                $days[$key] = "{$day} ";
            }

            if ($key !== 0 && ($key + 1) % 7 == 0) {
                if ($day < 10 ) {
                    $days[$key] = " {$day}\n";
                }

                if ($day >= 10 ) {
                    $days[$key] = "{$day}\n";
                }
            }
        }

        $string = $string.implode($days);
        $newlines = substr_count($string, "\n");

        while($newlines <= 7) {
            $string = $string."\n";
            $newlines++;
        }


        return rtrim($string)."\n";
    }

    private function _return_top_two_lines()
    {
        $string = $this->_month_names[$this->_month] . " " . $this->_year->to_string();
        $string = rtrim(str_pad($string, 20, ' ', STR_PAD_BOTH));
        $string = $string . "\n" . $this->_banner;
        return $string;
    }

}
