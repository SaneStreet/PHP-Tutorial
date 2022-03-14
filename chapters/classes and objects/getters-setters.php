<?php 

    ## Classes

    class User {

        # values for User
        private $email;
        private $name;

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

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            if(is_string($name) && strlen($name) > 1) {
                $this->name = $name;
                return "Name has been updated to $name.";
            } else {
                return "$name is not a valid name.";
            }
        }

    }

    $userTwo = new User('Dutch', 'dutch@vanderlinde.com');
    // echo $userTwo->getName() . '<br />';
    // echo $userTwo->setName(50);
    echo $userTwo->setName('Leopold') . '<br />';
    echo $userTwo->getName() . '<br />';

?>