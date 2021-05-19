<?php

class model
{
  public $name;
  public $salary;

  public function set($name, $salary) {
    $this->name = $name;
    $this->salary = $salary;
  }

  public function getName() {
    return $this->name;
  }

  public function getSalary() {
    return $this->salary;
  }

}

?>
