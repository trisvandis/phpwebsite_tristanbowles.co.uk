<?php

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];  


                       
if ($username&&$password)
{
    $user = "root";
    $pass = "";
    $hostname = "localhost"; 
    
    $connect = mysql_connect($hostname, $user, $pass) or die("Error: Can't connect!");
    mysql_select_db("trisbo_website") or die("Error: Can't find db");
        
    $query = mysql_query("SELECT * FROM users WHERE username='$username'");    
    $numrows = mysql_num_rows($query);
    
    if ($numrows!=0)
        
    {
        while ($row = mysql_fetch_assoc($query))
            
        {
          
            $dbusername = $row['username'];
            $dbpassword = $row['password'];    
        }
        
       //check to see if they match
        
        if ($username==$dbusername&&$password==$dbpassword)    
        {
           header( 'Location: http://tristanbowles.co.uk/index.php' ) ;
            
            $_SESSION['username']=$username;
            
        }
        
        else    
            echo "Incorrect password";
        
    }
    else
        die("That user doesn't exist!");
    
    

}
else
    die("Please enter a username and password!");

?>