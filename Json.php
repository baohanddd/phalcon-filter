<?php
namespace App\Filter;

class Json
{
    public function filter($value)
    {
        return json_decode($value, true);
    }
}