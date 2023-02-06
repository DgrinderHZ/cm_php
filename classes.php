<?php
class Fruit {
  // Properties
  protected $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$banan = new Fruit();

$banan->set_name('BANAN');
echo $banan->get_name();
?>