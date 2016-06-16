<?php
class sql{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $pass = 'root';
    protected $db = 'doc_framework';
    protected $myconn;
    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;}
        return $this->myconn;
    }
    function close() {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }
    function query($query){
        $con = new sql();
        $con->connect();
        $stmt = $con->myconn->query($query);
        $datas = $stmt->fetch_All();
        return $datas;
    }
}