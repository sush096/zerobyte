<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "email_task";

// $servername = "localhost";
// $username = "id14342709_zerobyte";
// $password = "PSHKq^Ml#ai5u5u-";
// $dbname = "id14342709_email_task";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("<h2>Database Connection Failure : " . $conn->connect_error . "</h2><hr>");
} 

$email = ucwords(mysqli_real_escape_string($conn, $_POST['email']));

$sql = "SELECT * FROM users WHERE email_id = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        $email=$row['email'];
    }
} else {
// $email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "INSERT INTO users (id, email_id)
VALUES (NULL, '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Your Entry is successfully entered";
} else {
    echo "sorry please try again!!";
}
}
$conn->close();
?>
    
<!DOCTYPE html PUBLIC>
 
<html>
<head>
    <title>Zer0BYTE > Sign up</title>
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <link href="css/responsive.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 

    <!-- Animation CSS (animate.css) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">

    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">


</head>
<body class="loaded" style=" background-color: #1E2125; font-family:Gilroy !important;">
   
  <div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
  
    <!-- start header div -->
        <header class="text-gray-500 body-font wow animate__animated animate__pulse">
         <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="img/ZerobyteLogo.png">
            </a>
          </div>
        </header>
    <!-- end header div -->  

                <!--    -----------------hero section---------------   -->

           <section class="text-gray-700 body-font">
              <div class="container-fluid mx-auto flex px-5 py-24 md:flex-row flex-col">
                <div class="lg:flex-grow md:w-50 lg:pr-24 mt-24 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center ml-24 text-center pb-5 wow animate__animated animate__fadeInRight">
                  <h1 class="title-font sm:text-5xl text-6xl mb-4 font-bold text-gray-900">The perfect data
                  <br>storage solution
                  </h1>
                  <p class="mb-8 leading-relaxed" style="width:75%;">We are working on an app that uses revolutionary radiowave technology to transfer your digital files into objects around you.</p>
                  <div class="flex justify-center">
                    
                        <div class="flex w-full md:justify-start justify-center">
                            <form action="#" method="post">
                                <input class="bg-gray-800 rounded mr-4 border border-gray-700 text-white focus:outline-none focus:border-indigo-500 text-1xl px-4 md:w-full lg:w-full xl:w-2/2 w-4/4" type="text" name="email" value="" placeholder="Input your email" required="">
                                <button class="inline-flex text-white border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Notify Me</button>
                            </form>
                        </div>
                      </div>
                    </div>
                    <div class="lg:max-w-lg lg:w-full md:w-50 w-50 text-left show" id="heroImage">
                      <img class="object-center rounded lg:ml-24 sm:ml-0 wow animate__animated animate__fadeInLeft" alt="hero" src="img/herophone.png">                                                                                                    
                    </div>
                    <!-- for mobile view -->
                    <!-- <div class="lg:max-w-lg lg:w-full md:w-50 w-50 text-left hidden" id="heroImage">
                      <img class="object-right rounded" alt="hero" src="img/herophone.png" style="width: 90%;">
                    </div>
                  </div> -->
                </section>


                <!--  ------------------section 2------------- -->


                <section class="text-gray-500 body-font" id="section2">
                  <div class="container px-5 pt-24 py-5 mx-auto">
                    <div class="flex flex-col text-center w-full mb-20">
                      <h1 class="sm:text-5xl text-4xl font-medium title-font mb-4 text-white">What it does</h1>
                    </div>
                    <div class="flex flex-wrap wow animate__animated animate__fadeIn animate__delay-2s">
                        <img src="img/links.png" class="w-100">
                  </div>
                <div class="text-center mt-5 my-10">
                      <p>Connect all your digital systems to ZERObyte to enable beaming of all your files.</p>
                  </div>
                </div>

                </section>

                <section>
                    
                </section>


                <!-- ----------------------section 3---------------------       -->
                <section class="text-gray-500 body-font show" id="section3">
                  <div class="container px-5 pt-24 mx-auto flex flex-wrap">
                     <div class="flex flex-col text-center w-full">
                      <h1 class="sm:text-5xl text-4xl font-medium title-font mb-4 text-white">How it works</h1>
                    </div>
                    <div class="flex flex-col flex-wrap lg:py-6 my-10 lg:w-1/2 lg:pl-12 sm:ml-auto sm:mr-auto lg:text-left text-center">
                        <hr class="sm:m-auto lg:ml-0">
                      <div class="flex flex-col mb-10 lg:items-start items-center">
                        <div class="flex-grow w-50">
                          <h2 class="text-white  text-lg sm:text-3xl title-font font-normal mb-3">Compressing</h2>
                          <p class="leading-relaxed text-base ">For effective file storage using ZERObyte, ZERObyte uses<br> in-built revolutionary compression algorithm to continually<br> compress file size while beaming occurs. Eventually all your<br> files are fully compressed and completely beamed. Terabytes<br> of data basically become ZERObyte.</p>
                        </div>
                      </div>
                      <hr class="sm:m-auto lg:ml-0">
                      <div class="flex flex-col mb-10 lg:items-start items-center">
                        <div class="flex-grow">
                          <h2 class="text-white text-lg sm:text-3xl title-font font-normal mb-3">Beaming</h2>
                          <p class="leading-relaxed text-base">ZERObyte enhances and uses your phone’s <b>wireless Hotspot</b><br>
                           to beam compressed data into the atomic structure of
                           <br> nearby objects using electrons as ‘1’s and holes as <b>‘0’s</b>. Every
                           <br> object is a potential storage device.</p>
                        </div>
                      </div>
                      <hr class="sm:m-auto lg:ml-0">
                      <div class="flex flex-col mb-10 lg:items-start items-center">
                        <div class="flex-grow">
                          <h2 class="text-white text-lg sm:text-3xl title-font font-normal mb-3">Retrieving</h2>
                          <p class="leading-relaxed text-base">To read (Retrieve) your data from Vessels (objects used as<br>
                           data storage space), the ZERObyte satelite interpretes the 
                           <br>data encoded on objects from any location and then 
                           <br>transmits decryted data to the app via wi-fi. Location of 
                           <br>stored file can never be a data storage barrier.</p>
                        </div>
                      </div>
                      <hr class="sm:m-auto lg:ml-0">
                    </div>
                    <div class="lg:w-1/2 w-50 mb-10 lg:mb-0 rounded-lg overflow-hidden wow animate__animated animate__zoomIn animate__delay-1s">
                      <img alt="illustration" class="object-cover object-center w-80" src="img/side2x.png">
                    </div>
                    
                </div>
                <div class="text-center pb-10">
                        <p>Compress. Beam. Retrieve</p>
                    </div>
                </section>



                    <!-- Preview Screens -->

            <section class="text-gray-500 body-font" id="section2">
              <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                  <h1 class="sm:text-5xl text-4xl font-medium title-font mb-4 text-white">Preview Screens</h1>
                  <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
                </div>
                <div class="flex flex-wrap m-12 ml-32 gallery wow animate__animated animate__fadeIn animate__delay-2s">
                  <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                     <a href="img/Screen 1.png" class="with-caption image-link"> <img alt="gallery" class="w-100 lg:mr-auto sm:ml-auto object-cover object-center" src="img/Screen 1.png"></a>
                    </div>
                  </div>
                  <div class="lg:w-1/3 sm:w-1/2 p-4"> 
                     <div class="flex relative">
                     <a href="img/Screen2.png"  class="with-caption image-link"><img alt="gallery" class="w-100 ml-auto mr-auto object-cover object-center" src="img/Screen2.png"></a>
                    </div>
                  </div>
                  <div class="lg:w-1/3 sm:w-1/2 p-4">                 
                    <div class="flex relative">
                     <a href="img/Screen 3.png"  class="with-caption image-link"><img alt="gallery" class="w-100 lg:mr-auto sm:ml-auto object-cover object-center" src="img/Screen 3.png"></a>
                    </div>
                  </div>
                  <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                     <a href="img/Frame5.png"  class="with-caption image-link"><img alt="gallery" class="w-100 ml-auto sm:mr-auto object-cover object-center" src="img/Frame 5.png"></a>
                    </div>
                  </div>
                  <div class="lg:w-1/3 sm:w-1/2 p-4">                 
                    <div class="flex relative">
                     <a href="img/Group 75.png" class="with-caption image-link"><img alt="gallery" class="w-100 ml-auto lg:mr-auto object-cover object-center" src="img/Group 75.png"></a>
                    </div>
                  </div>
                  <div class="lg:w-1/3 sm:w-1/2 p-4">                 
                    <div class="flex relative">
                     <a href="img/Group 74.png"  class="with-caption image-link"><img alt="gallery" class="w-100 sm:mr-auto sm:ml-auto object-cover object-center" src="img/Group 74.png"></a>
                    </div>
                  </div>
                </div>
              </div>
            </section>


            <section class="text-white body-font">
              <div class="container-fluid mx-auto flex flex-col px-5 py-24 justify-center items-center" id="section5">
                <div class="flex flex-col text-center w-full" id="footer_form">
                    <h1 class="title-font sm:text-3xl text-5xl mx-auto mb-5 font-bold text-white-900 text-left wow animate__animated animate__fadeInRight animate__delay-1s" style="/*position: absolute; margin-top: 10%;margin-right: 15%;*/">We are launching the app soon.
                    <br>Be the first to gain access.</h1>
                            <form action="#" method="post" class="flex mx-auto mt-12 text-white border-0 py-2 px-12 sm:w-50 focus:outline-none rounded text-lg wow animate__animated animate__fadeInLeft animate__delay-10s">
                                <input class="bg-white rounded mr-4 sm:ml-4 text-grey focus:outline-none border focus:border-indigo-500 text-1xl px-5 md:w-70 lg:w-full xl:w-1/2 w-4/4" type="text" name="email" value="" placeholder="Input your email" required="">
                                <button class="inline-flex text-white border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Notify Me</button>
                            </form>
                        </div>
                <img class="w-100 object-cover object-center rounded" alt="hero" src="img/Launch.png">
              </div>

            </section>


            <!-- --------------footer------------------- -->


            <footer class="body-font" id="section2">
              <div class="container-fluid px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <p class="text-sm text-white sm:ml-5 sm:pl-4 sm:py-2 sm:mt-0 mt-4">Cookies setting</p>
                <p class="text-sm text-white sm:ml-12 sm:pl-4 sm:py-2 sm:mt-0 mt-4">Term of use</p>
                <p class="text-sm text-white sm:ml-12 sm:pl-4 sm:py-2 sm:mt-0 mt-4">Privacy policy</p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                  <a class="text-white">
                    <svg width="20" height="20" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.9092 1.32812H4.30307C2.47889 1.32812 1 2.55247 1 4.06267V9.53176C1 11.042 2.47889 12.2663 4.30307 12.2663H10.9092C12.7334 12.2663 14.2123 11.042 14.2123 9.53176V4.06267C14.2123 2.55247 12.7334 1.32812 10.9092 1.32812Z" fill="white" stroke="white" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.4336 6.42315C10.5151 6.87574 10.4213 7.33813 10.1654 7.7443C9.90905 8.15084 9.50432 8.48013 9.00754 8.68576C8.51119 8.89174 7.94877 8.96319 7.40001 8.89066C6.85126 8.81776 6.34435 8.60452 5.95106 8.28103C5.55821 7.95718 5.29924 7.53977 5.21071 7.0879C5.12263 6.63603 5.20939 6.17292 5.45955 5.76421C5.70926 5.35514 6.10916 5.02186 6.60287 4.81079C7.09613 4.60009 7.65766 4.52284 8.2073 4.58993C8.76794 4.65848 9.28718 4.87352 9.6884 5.20354C10.0892 5.53392 10.3503 5.96149 10.4336 6.42315Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.4248 3.7876H11.432" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                  </a>
                  <a class="ml-12 text-white">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="text-white mx-12 ">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                 
                </span>
              </div>
            </footer>


         <!-- jquery.clim.min.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <!-- pooper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
    <!-- WOW JS -->
    <script src="js/wow/wow.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- custom js -->
    <script src="js/main.js"></script>   
</body>
</html>



