<?php 
class DBconnector{
    var $servername = "ec2-54-235-208-103.compute-1.amazonaws.com";
    var $username = "zfaazqzfeeedzr";
    var $password = "f10892ec91fca038cf0251581bbe5999a20387b8c0919dbec26a6c853398ca24";
    var $dbname = "d17l3uuqt36ei5";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>
