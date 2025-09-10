<?php 

namespace ProgrammerZamanNow\Belajar;

class Customer{
    function __construct(private string $name){}

    function sayHello($name): string
    {
        return "Hello $name, my name is $this->name";
    }
}