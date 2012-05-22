<?php
class HelloTask extends Shell {
    public $uses = array('User');
    public function execute() {
       $user = $this->User->find("all");
       $this->out(print_r($user, true));
       // echo "Welcome";
    }
}