<?php
    class Database{
        private $hosts="localhost";
        private $login="less";
        private $password="123";
        private $db="lesson";
        function ConnectDb(){
            if(mysql_connect($this->hosts, $this->login, $this->password)){
                echo "Connect to host is ok";
                if(mysql_select_db($this->db)){
                    echo"Connect to db is ok";
                }
            }
        }
        function CloseConnect(){
            mysql_close();
            
        }
        
    }
?>