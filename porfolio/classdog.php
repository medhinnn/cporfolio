
<?php

class Dog {
  public $name;

	public function __construct($name) {
		$this->name = $name;
  }

  public function bark() {
    echo $this->name . ' barked!';
  }
}

$roger = new Dog('Roger');
$roger->bark();

    
?>