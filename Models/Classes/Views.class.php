<?php

class View {
    public function header() {

        include (BASE_DIR .'/Templates/Header.php');
    }

    public function footer() {
        
        include (BASE_DIR .'/Templates/Footer.php');
    }
    
}
