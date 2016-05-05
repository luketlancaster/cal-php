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

    public function __construct($month, $year = null)
    {
        $this->_month = $month;
        $this->_year = new Year(2016);
        $this->_start_day = (new Day($this->_year->to_string(), $this->_month))->day_of_week();
        $this->_leap = $this->_year->leap(); // Probably don't need?
    }

    public function to_string()
    {
        return "The month is $this->_month and the start day is $this->_start_day. Don't worry about anything else yet";
    }
}
