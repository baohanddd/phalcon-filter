<?php
namespace App\Filter;

class Like
{
    public function filter($value)
    {
        return '%'.$value.'%';
    }
}