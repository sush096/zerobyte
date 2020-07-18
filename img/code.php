 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="vendors/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Copy & Paste</title>
</head>
<body>
<?php
$nameSuccess = '';
$servername = "localhost";
$username = "id14347816_akindeji";
$password = "7Ay0?76aafLWc7K+";
$database = "id14347816_localhost";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Insert Data
 if($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST["email"];
  //  echo $email;
   $sql = "INSERT INTO registration (email) VALUES ('$email')";
   if($conn->query($sql) === TRUE) {
    $nameSuccess = "You have successfully subscribed";
   } else {
     $nameSuccess = "Error: " .$sql. "<br>" .$conn->error;
   }
    
  }
$conn->close();
?>
  <div class="overlay">
    <div class="layer layer-1"></div>
    <div class="layer layer-2"></div>
    <div class="layer layer-3"></div>
    <div class="layer layer-4"></div>
    <div class="layer layer-4 l-5"></div>
    <div class="layer layer-4 l-6"></div>
  </div>

  <header class="pt-3 pb-5">
    <div class="container">
      <nav class="navbar">
        <a href="#" class="nav-brand">
          <img src="img/Group 21.svg" alt="Ditto">
        </a>
      </nav>
      <section class="hero mt-5 pt-3 pb-4">
        <h1><span class="h-1 anim">Copy & Paste in</span> <span class="h-2 anim">3D</span></h1>
        <p class="mt-4 anim">Want to be able to clone things like household items in minutes? No, you don’t need to be a master wizard to do this, you’ll need a 3D printer though, oh and a smartphone for our revolutionary app.</p>
        <div class="text-center mt-5 pt-4">
          <a href="#" class="btn btn-primary py-2">Join the waiting List</a>
        </div>
      </section>
    </div>
  </header>

  <main class = 'm-0'>
    <section id="features" class="mt-5">
      <div class="container">
        <h3>How it works</h3>
        <p class="mb-4">To prove that there's no sorcery involved, we'll show you how it works in 3 easy steps:</p>
        <div class="row">
        <div class="col-md-4 text-center">
          <img src="img/Vector.svg" alt="Scan">
          <h5 class="mt-3">Scan</h5>
          <p class="mt-2">Scan and record app dimension using our app's AR technology</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/Vector (1).svg" alt="Scan">
          <h5 class="mt-3">Send</h5>
          <p class="mt-2">Send results to your 3D printer<br> (no, there's zero need to know design')</p>
        </div>
        <div class="col-md-4 text-center">
          <img src="img/Vector (2).svg" alt="Scan">
          <h5 class="mt-3">Scan</h5>
          <p class="mt-2">Immediately start printing and  get your 3D printed item</p>
        </div>
      </div>
      </div>
    </section>
    <section id="subscribe" class="mt-5">
      <div class="container">
        <div class="text-center">
          <h2>Looks cool right?</h2>
          <h2>Be the first to know when we launch</h2>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "post">
            <div class="form-group">
              <div class="d-flex justify-content-center align-items-center flex-wrap">
                  <input type="email" name = "email" class="form-control" required>
                  <button class="btn btn-subscribe">Join the waiting list</button>
              </div>
              <div class="alert alert-success w-50 mx-auto mt-4"><?php echo $nameSuccess;?></div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <script src="vendors/jquery.min.js"></script>
  <script src="vendors/popper.min.js"></script>
  <script src="vendors/bootstrap.min.js"></script>
  <script src="vendors/gsap.min.js"></script>
  <script src="vendors/ScrollTrigger.min.js"></script>
  <script src="js/script.js"></script>
</body>
</html>