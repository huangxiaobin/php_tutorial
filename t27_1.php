<?php
    $my_host = 'localhost';
    $my_user = 'root';
    $my_pass = '';
    $my_db = 'game';

    $my_result;

    mysql_connect($my_host, $my_user, $my_pass) or die("not connected to database");

    mysql_select_db($my_db)or die("not connected to database");

    //update
    //$my_query = "UPDATE account SET gender= 'female' WHERE gender = 'male'" ;
    //mysql_query($my_query) or die("update the table failed");


    //header("Location:invalidname.html");
    //$username = $_POST['username'];
    //$pass1 = $_POST['pass'];
    //$pass2 = $_POST['pass2'];
    
    //echo date("d/m/y")."<br/>";
    //header("Location:thankyou.html");
    
    
    if(!eregi("[^A-Za-z0-9]",  $_POST['username'])){
        echo ("ok")."<br/>";
        //test for duplicate names
        $query="SELECT * FROM user where email = '$_POST[email]'";
        $result=mysql_query($query);
        $num=mysql_num_rows($result);

        if($num == 0){
            echo ("email address is valid")."<br/>";
//            $query2="SELECT * FROM user WHERE email = '$_POST[email]'";
//            $result2=mysql_query($query2);
//            $num2=mysql_num_rows($result2);
//            echo($query2);

//            if (($num2 ==0) ){
            if ($_POST['pass'] == $_POST['pass2']) {
                echo ("password is right")."<br/>";
          
                //generate random code
                $confirm_code=md5(uniqid(rand()));
                //get rid of html
                $name=strip_tags($_POST['username']);
                $email=strip_tags($_POST['email']);
                $pass=strip_tags($_POST['pass']);

                //insert data into database
                $sql="INSERT INTO temp SET code='$confirm_code', username='$name', email='$email', password='$pass'";
                $result=mysql_query($sql);

                if($result){
                    echo("insert data to database success")."<br/>";
                    $message="Your confirmation email has been sent \r\n";
                    $message="Click on this link to activate your account \r\n";
                    $message="http://phpgametest.byethost2.com/confirmation.php?passkey=$confirm_code";

                    $sentmail=mail("$email",'Registration Confirmation',"$message");
                    echo("send confirm mail and thank you.html")."<br/>";
                }else{
                    echo("insert data to database fail")."<br/>";
                    //echo"Can not find your email in our database";
                }

                //if email was sent
                if($sentmail){
                    echo("email sent ok")."<br/>";
                    //header("Location:emailsent.html");
                }
            }else{
                echo("2 pass word not correct")."<br/>";
                //header("Location:nameinuse.html");
            }            
  
        } else {
            echo ("email address already exit")."<br/>";
        }
    } else {
        echo ("invalid name")."<br/>";
    //    header("Location:invalidname.html");
    }
        
    //echo date("d/m/y")."<br/>";
?>