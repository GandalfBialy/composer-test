<?php

namespace gandalfbialy;

class A
{
    public $name;
    private $secret;
    protected $lastName;

    public function show()
    {
        echo get_class($this), $this->secret;
    }
}