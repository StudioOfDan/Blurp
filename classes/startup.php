<?php

class start {
    function secureSwitch(){
        if(!isset($_GET['page'])){
            header('Location:?page=home');
        }
    }
}