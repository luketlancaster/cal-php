<?php

class Year
{
    private $_year = null;

    public function __construct($year)
    {
        $this->_year = $year;
    }

    public function leap()
    {
        $y = $this->_year;

        if ($y % 4 == 0 && $y % 100 == 0 && $y % 400 == 0) return true;
        if ($y % 4 == 0 && $y % 100 == 0) return false;
        if ($y % 4 == 0) return true;
        return false;
    }

    public function to_string()
    {
        return $this->_year;
    }
}

