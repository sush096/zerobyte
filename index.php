

<?php
// error_reporting(0);
// $db = new mysqli('localhost', 'root', '', 'email_task');  //change "localhost" to "sever_name" and "root" to "password" 
// if($db->connect_errno){
//     die('Sorry Database not connected !!!');
}
?>


<?php

## CONFIG ##

# LIST EMAIL ADDRESS
// $recipient = "enter the lists email address here";

# SUBJECT (Subscribe/Remove)
// $subject = "Subscribe";

# RESULT PAGE
// $location = "enter the URL of the result page here";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
// $sender = $recipient;

# MAIL BODY
// $body .= "Name: ".$_REQUEST['Name']." \n";
// $body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required

## SEND MESSGAE ##

// mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");

## SHOW RESULT PAGE ##

// header( "Location: $location" );
?>


<!DOCTYPE html PUBLIC>
 
<html>
<head>
    <title>Zer0BYTE > Sign up</title>
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div -->
    <div id="header">
        <h3>Zer0BYTE > Sign up</h3>
    </div>
    <!-- end header div -->  
     
    <!-- start wrap div -->  
    <div id="wrap">
         
        <!-- start php code -->
          <?php
                // define variables and set to empty values
                $emailErr = "";
                $email = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                  if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } else {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "Invalid email format";
                    }
                  }        
                }

          
?>
        <!-- stop php code -->
     
        <!-- title and description -->   
        <h3>Signup Form</h3>
        <p>Please enter your email addres to create recieve our newsletter</p>
         
        <!-- start sign up form -->  
        <form action="" method="post">
            <input type="text" name="name" value="Enter your name" required style="border:none;border-bottom: 1px solid #DFDFDF; "><br><br>
            <label for="email">Email:</label> 
            <input type="text" name="email" value="<?php echo $email;?>" required>
             <input type="submit" class="submit_button" value="Subscribe" />
        </form>
        <!-- end sign up form -->
        <?php
             $sql= mysqli_query("INSERT INTO `users`(`id`, `email_id`) VALUES (1,'$email')") or die(mysqli_error());


        ?>       
    </div>
    <!-- end wrap div -->
</body>
</html>