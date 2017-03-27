<?php
             

            $host="localhost"  ;
            $name="root";
            $password="";  
			$_sql = file_get_contents('tp.sql'); 
			$_arr = explode(';', $_sql);
			$_mysqli = new mysqli($host,$name,$password);
			$_mysqli->query('set names utf8');
			$_mysqli->query("CREATE DATABASE IF NOT EXISTS bt DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;");
           $_mysqli->query("USE bt");
			if (mysqli_connect_errno()) {   
			 exit('连接数据库出错');
			}
			//执行sql语句
			foreach ($_arr as $_value) {    
			          $_mysqli->query($_value.';');
			}
			$_mysqli->close();
			$_mysqli = null;


           $url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
                
           echo "chengg";