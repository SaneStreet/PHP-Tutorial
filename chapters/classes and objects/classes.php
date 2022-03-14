<?php 

    ## Classes

    class User {

        # values for User
        public $email;
        public $name;

        # Constructor of User
        public function __construct($name, $email)
        {
            $this->email = $email;
            $this->name = $name;
        }
        
        # Login function
        public function Login() {
            // echo 'User logged in.' . '<br />';
            echo $this->name . ' logged in.';
        }

    }

    // $userOne = new User();

    // $userOne->Login();
    // echo $userOne->name;

    $userTwo = new User('Dutch', 'dutch@vanderlinde.com');
    // echo $userTwo->name . '<br />';
    // echo $userTwo->email . '<br />';

    $userTwo->Login();

?>