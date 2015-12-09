<?php
namespace App\Filter;

class Double
{
    public function filter($value)
    {
        return (double) $value;
    }
}