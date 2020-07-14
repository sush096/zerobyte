

<!-- <?php
/*error_reporting(0);
$db = new mysqli('localhost', 'root', '', 'email_task');  //change "localhost" to "sever_name" and "root" to "password" 
if($db->connect_errno){
    die('Sorry Database not connected !!!');
}*/
?> -->


<!DOCTYPE html PUBLIC>
 
<html>
<head>
    <title>Zer0BYTE > Sign up</title>
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <!-- start header div -->
        <header class="text-gray-500 body-font">
          <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
              <img src="img/ZerobyteLogo.png">
            </a>
          </div>
        </header>
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
        <section class="text-gray-500 body-font">
          <div class="container mx-auto flex px-5 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center" id="tittle">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">LAUNCHING 
                <br class="hidden lg:inline-block">SOON
              </h1>
              <p class="mb-8 leading-relaxed">We are working on an app that stores your files in objects around you. You never have to worry about limited space ever again.</p>
              <div class="flex justify-center">
                 <form action="" method="post">
                    <input type="text" name="email" value="<?php echo $email;?>" required placeholder="Input your email">
                <button class="ml-4 inline-flex text-gray-400 border-0 py-2 px-6 focus:outline-none hover hover:text-white rounded text-lg">Notify Me</button>
                </form>
              </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img src="img/Group (1).png" id="sticker">
                <img src="img/Group (2).png" id="card">
                <img src="img/flashdrive (1).png" id="flashdrive">
                <img src="img/Group.png" id="jpg">
              <img class="object-cover object-center rounded" alt="hero" src="img/boxandlogo.png">
            </div>
          </div>
        </section>

        <!-- start sign up form -->  
       
        <!-- end sign up form -->
        <!-- <?php -->
             // $sql= "INSERT INTO `users`(`id`, `email_id`) VALUES (NULL,'$email')" or die(mysqli_error());
             // $result = $conn->query($sql);

        ?>   -->    
    </div>
    <!-- end wrap div -->
</body>
</html>