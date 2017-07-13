<?php

namespace Pyz\Zed\HelloWorld\Business;

class GreetingAugmenter
{
    public function augmentGreeting(string $originalGreeting) : string
    {
        return 'Hello, ' . $originalGreeting . '!!';
    }
}
