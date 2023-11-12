<?php
// Your code here!
    class Human {
        private $name;
        private $birthday;
        private $gender;
        public function __construct($name, $birthday, $gender) {
            $this->name = $name;
            $this->birthday = $birthday;
            $this->gender = $gender;
        }
        public function walk() {
            echo $this->name."は歩きます".PHP_EOL;
        }
        
        public function eat() {
            echo $this->name."は食べます".PHP_EOL;
        }
    }
    
    $human = new Human("山田", "1998-02-28", "man");
    
    $human->eat();
    $human->walk();

?>
