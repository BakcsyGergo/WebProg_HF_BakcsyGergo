<?php

class Szamologep {
   private $val1, $val2;
 
 function __construct($val1, $val2) {
        $this->val1 = $val1;
        $this->val2 = $val2;
        
    }

 public function osszeadas() {
     return "Osszeg:" . ($this ->val1+$this->val2);
 }
 public function kivonas() {
     return "Kulonbség:" . ($this ->val1-$this ->val2);
 }
 public function szorzas() {
     return "Szorzat:" . $this ->val1*$this ->val2;
 }
 public function osztas() {
     return "Hányados:" . $this ->val1/$this ->val2;
 }
    public function __toString() {
        return "A szamok:" . $this-> val1 . ' és '. $this->val2;
    }
}

