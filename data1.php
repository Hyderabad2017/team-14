<?php 
   $dbhost = 'localhost:3036'; 
   $dbuser = 'root'; 
   $dbpass = 'rootpassword'; 
   $data = array();
    
   $conn = mysql_connect($dbhost, $dbuser, $dbpass); 
    
   if(! $conn ) { 
      die('Could not connect: ' . mysql_error()); 
   } 
    
   $sql = 'SELECT pid FROM  details'; 
   mysql_select_db('test_db'); 
   $retval = mysql_query( $sql, $conn ); 
    
   if(! $retval ) { 
      die('Could not get data: ' . mysql_error()); 
   } 
    
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) { 
$data[]=$row;
   } 
    
   echo "Fetched data successfully\n"; 

    
   mysql_close($conn); 
?> 