<?php
    class User{
        public $Name;
        public $Username;
        public $Email;

        public function AddFriend($Name, $Username, $Email)
        {
            $this->name = $Name;
            echo "{$this->name} Added a friend";
        }
        public function PostaStatus($Name, $Username, $Email)
        {
            $this->name = $Name;
            echo "<br>";
            echo "{$this->name} Posted a Status";
        }
    }
    $myname = new User();
    $myname->AddFriend('Mitch Kiether', 'kithkthrxx', 'mkeiyyinfantado@gmail.com');
    $myname->PostaStatus('Mitch Kiether', 'kithkthrxx', 'mkeiyyinfantado@gmail.com');

?>
