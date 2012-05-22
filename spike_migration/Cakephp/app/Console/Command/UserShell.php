<?php
// found in Console/Command/UserShell.php
class UserShell extends AppShell {
    public $tasks = array('Hello'); // found in Console/Command/Task/HelloTask.php
    public function main() {
        $this->Hello->execute();
    }
}