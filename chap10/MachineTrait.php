<?php 
trait MachineTrait {
  private $starting = 'Starting...Run!';

  public function run() {
    print $this->starting;
  }
}

// trait MachineTrait {
//   private $starting = 'Starting...Run!';

//   public function run() {
//     print $this->starting;
//   } 
// }
