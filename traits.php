<?php
    trait AuthTrait {
        public function login() {
            echo "Logged in";
        }
    }
    
    trait RedirectTrait {
        public function redirect($url) {
            header("Location: $url");
            exit;
        }
    }
    
    class Admin {
        use AuthTrait, RedirectTrait;
    }
    
?>