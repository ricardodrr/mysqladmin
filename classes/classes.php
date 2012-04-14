<?php

class User{
    var $user="cualquiera";
    var $host="";
    
    public function setUser($user) {
        $this->user = $user;
        return $this;
    }
    
    public function getUser() {
        return $this->user;
    }

    
    public function setHost($host) {
        $this->host = $host;
        return $this;
    }
    
    public function getHost() {
        return $this->host;
    }    
}





?>