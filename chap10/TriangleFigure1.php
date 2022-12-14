<?php

class TriangleFigure {
  public $base;
  public $height;

  public function __construct() {
    $this->base = 1;
    $this->height = 1;
  }

  public function getArea() {
    return $this->base * $this->height / 2;
  }
}

// class TriangleFigure {
//   public $base;
//   public $height;

//   public function __construct() {
//     $this->base = 1;
//     $this->height = 1;
//   }

//   public function getArea(): float {
//     return $this->base * $this->height / 2;
//   }
// }
