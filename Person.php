<?php

class Person {
    public $firstName;
    public $lastName;

    public function show () {
        print "僕の名前は、{$this->firstName } {$this->lastName } です、";
    }
}