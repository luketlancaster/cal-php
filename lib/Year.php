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
        return true; // For now, since we're only worried about 2016 :/
    }

    public function to_string()
    {
        return $this->_year;
    }
}
