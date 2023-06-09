<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Boostrap Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

</head>
<body>

<?php
require 'db.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM kmb WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 navbar-default sticky-top">
        <div class="container-fluid ">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link text-white" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Details</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Contact</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>

      <section class="about">
      <div class="container p-5">
        <div class="container-fluid p-5">
          <div class="row align-items-center">
            <div class="col-md-9 text-white justify-content-center">
              <h2>MD ARIFUL HASAN</h2>
              <h4> Full Stack Developer </h4>
              <p > Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                     dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt mollit anim id est laborum. </p>
            </div>
            <div class="col-md-3">
                <img src="images/arifBG.png" class="img-fluid rounded-circle border border-light"  alt="">       
              </div>
          </div>
        </div>
      </div>
    </section>

       <div class="education-container" >
           <div class="container">
              <h1 class="edu py-5 text-center" >Education</h1>
              <div class="row py-5">
                <div class="col-md-2 py-2  text-center text-white m-auto">
                    <p  class="colorBox py-5 m-auto">Jan 2012 <br> Dec 2015 </p>
                </div>
                  <div class="col-md-10">
                    <div class="card">
                      <div class="card-body">
                        <h1 id="headChange" >Jumbotron Example</h1> 
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p> 
                      </div>
                    </div>
              </div>
              <div class="row py-5">
                <div class="col-md-2 py-2  text-center text-white m-auto">
                  <p  class="colorBox py-5 m-auto">Jan 2012 <br> Dec 2015 </p>
              </div>
                <div class="col-md-10">
                  <div class="card">
                    <div class="card-body">
                      <h1 id="headChange" >Jumbotron Example</h1> 
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..</p> 
                    </div>
                  </div>
              </div>

           </div>
       </div>

      </div>

       <div class="project-container">
         <div class="container-fluid">

            <h1 class="edu py-5 text-center" >Education</h1>
             <div class="row">
             <div class="col-md-3">
              <img src="images/arifBG.png" class="img-fluid border border-light"  alt="">       
              <p>lorem gdhjb mskfK EKFk kwejfk wfgaSGr sbgrwag</p>
              <span class="text-muted" >  hi thereee</span>
            </div>
            <div class="col-md-3">
              <img src="images/arifBG.png" class="img-fluid  border border-light"  alt="">       
              <p>lorem gdhjb mskfK EKFk kwejfk wfgaSGr sbgrwag</p>
              <span class="text-muted" >  hi thereee</span>
            </div>
            <div class="col-md-3">
              <img src="images/arifBG.png" class="img-fluid border border-light"  alt="">       
              <p>lorem gdhjb mskfK EKFk kwejfk wfgaSGr sbgrwag</p>
              <span class="text-muted" >  hi thereee</span>
            </div>
            <div class="col-md-3">
              <img src="images/arifBG.png" class="img-fluid  border border-light"  alt="">       
              <p>lorem gdhjb mskfK EKFk kwejfk wfgaSGr sbgrwag</p>
              <span class="text-muted" >  hi thereee</span>
            </div>
          </div>
        </div>
      </div>  
      
      <div class="portfolio ">
        <h1 class="edu py-5 text-center" >Portfolio</h1>
        <div class="row py-5">
          <div class="col-md-4" >
            <div class="card bg-transparent">
              <div class="card-body">
                <img src="images/arif1.jpg" class="w-50  border border-light"  alt="">       
              </div>
            </div>
       </div>
       <div class="col-md-4" >
        <div class="card bg-transparent">
          <div class="card-body">
            <img src="images/arif1.jpg" class="w-50  border border-light"  alt="">       
          </div>
        </div>
   </div>
   <div class="col-md-4" >
    <div class="card bg-transparent">
      <div class="card-body">
        <img src="images/arif1.jpg" class="w-50  border border-light"  alt="">       
      </div>
    </div>
</div>
</div>

<div class="row py-5">

<div class="col-md-4" >
  <div class="card bg-transparent">
    <div class="card-body">
      <img src="images/arif1.jpg" class="w-50  border border-light"  alt="">       
    </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card bg-transparent">
    <div class="card-body">
      <img src="images/arif1.jpg" class="w-50  border border-light"  alt="">       
    </div>
  </div>
</div>
<div class="col-md-4" >
  <div class="card bg-transparent">
    <div class="card-body">
      <img src="images/arif1.jpg" class="w-50  border border-light"  alt="">       
    </div>
  </div>
</div>

    </div>


    <div class="contact-conatiner">
      <div class="conatiner">
        <h1 class="py-5 text-center text-white" >It was bumpy right</h1>
        <p>But get in touch to play in right time</p>
        
        <div class="row">
          <div class="col-sm mx-1   border border-light ">
            <span style="font-size:3rem"; > 29</span>
            <p>Failed Attempts</p>
          </div>
          <div class="col-sm mx-1   border border-light">
            <span style="font-size:3rem"; > 29</span>
            <p>Failed Attempts</p>

          </div>
          <div class="col-sm mx-1  border border-light">
            <span style="font-size:3rem"; > 29</span>
            <p>Failed Attempts</p>

          </div>
          <div class="col-sm mx-1   border border-light">
            <span style="font-size:3rem"; > 29</span>
            <p>Failed Attempts</p>

          </div>
        </div>


        <h1 class="py-5 text-center text-white" >GET IN TOUCH</h1>
        <p class=" text-center text-white" >But get in touch to play in right time</p>
        <form action="backend.php">
        <div class="row p-5 m-5">
            <h3>Short message</h3>
             <div class="col">
              <input type="text" class="form-control bg-transparent" placeholder="First name" aria-label="First name">
             </div>
             <div class="col">
              <input type="text" class="form-control bg-transparent" placeholder="Last name" aria-label="Last name">
             </div>

         <textarea class="form-control py-5 my-5 bg-transparent" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
         <button type="button" class="btn btn-danger btn-lg">Submit</button>
        </div>
      </form>

      </div>
    </div>
    
    <div class="footer-container">
      <div class="container text-center">
        <div class="details">
          <p>Let your success ,stay silence</p>
          <h4>Frank Ocean</h4>
          <p>All right reseverd to Ariful Hasan</p>
        </div>
        
          <div class="y icon d-flex ">
          <div class="rounded-circle bg-light p-3 x">
            <i class="font fab fa-twitter"></i>
          </div>
          <div class="rounded-circle bg-light p-3 x">
            <i class="font fab fa-facebook-f"></i>
          </div>
          <div class="rounded-circle bg-light p-3 x">
            <i class="font fab fa-instagram"></i>
          </div>
        </div>


      </div> 
    </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"  ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"  ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"  ></script>
</body>
</html>