<?php

class Person {
    public $firstName;
    public $lastName;
    // コンストラクタ
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    
    // public function show () {
    //     print "僕の名前は、{$this->firstName } {$this->lastName } です、";
    // }

    // privateだと、呼び出せない。(カプセル化)
    private function show () {
        print "僕の名前は、{$this->firstName } {$this->lastName } です、";
    }
}