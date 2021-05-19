<?php

class controller
{
  private $model;
  private $view;

  public function __construct($model, $view) {
    $this->model = $model;
    $this->view = $view;
  }

  public function set($name, $salary){
    $this->model->set($name, $salary);
  }

  public function getName() {
    return $this->model->getName();
  }

  public function getSalary() {
    return $this->model->getSalary();
  }

  public function updateView(){
    $this->view->display( $this->getName(), $this->getSalary() );
  }

}

?>
