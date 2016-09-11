<?php namespace Structural\Registry;

/**
 * Class Registry
 * @package Structural
 */
class Registry
{
    /**
     * @var array
     */
    protected $register = [];

    /**
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->register[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        return $this->register[$key];
    }
}