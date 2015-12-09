<?php
namespace App\Filter;

class MongoId
{
    public function filter($value)
    {
        return new \MongoId($value);
    }
}