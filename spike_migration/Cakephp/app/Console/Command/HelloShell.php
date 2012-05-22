<?php
class HelloShell extends AppShell {
    public $uses = array('User');
    public function main() {
        $user = $this->User->find("all");
        $this->out(print_r($user, true));
    }
}