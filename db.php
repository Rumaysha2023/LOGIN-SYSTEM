<?php   


  include('connection.php');  
  if(isset($_POST['submit'])){
    
$uname= $_POST['uname'];    
$password = $_POST['password'];  

  }
    
      //to prevent from mysqli injection  
      $uname = stripcslashes($uname);  
      $password = stripcslashes($password);  
      $uname = mysqli_real_escape_string($con, $uname);  
      $password = mysqli_real_escape_string($con, $password);  
    
      $sql = "select *from logininfo WHERE uname = '$uname' and password = '$password' ";  
      $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result , MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result); 
      
      if($count == 1){  
        
          echo "<script type='text/javascript'>alert('you are logged in successfully');</script>";
     
      }  
      else{  
          $msg_error= ("Incorrect username or password"); 
          header("Location: http://localhost/task2/index.php?error=".$msg_error.''); die;
     
         
           die();
      }     
   
?>  




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body>
    
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">Frontend Bootcamp</a>

        <button class="navbar-toggler"
         type="button" 
         data-bs-toggle="collapse"
          data-bs-target="#navmenu">

          <span class="navbar-toggler-icon"></span>
        </button>

         <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#learn" class="nav-link">What you'll learn</a>
                </li>
                <li class="nav-item">
                    <a href="#questions" class="nav-link">Questions</a>
                </li>
                <li class="nav-item">
                    <a href="#instructors" class="nav-link">Instructors</a>
                </li>
                <li>
                <a href="logout.php" class="btn btn-info btn-md">
          <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
                </li>
            </ul>
         </div>
    </div>
   
</nav>

<!--showcase-->
<section class="bg-dark text-light p-5 p-lg-0 pt-lg-3 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1>Become a <span class="text-warning"> Web Developer</span></h1>
                <p class="lead my-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate optio, id vero, expedita architecto culpa,
                     impedit sed enim fugit libero nesciunt velit excepturi deleniti debitis ipsum mollitia a itaque quisquam.
                </p>
<button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#enroll">Start The enrollment</button>

            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="showcase.svg" alt="">
        </div>
    </div>
</section>


<!--newsletter-->
<section class="bg-primary text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
            <h3 class="md-3 mb-md-0">Sign Up for Newsletter</h3>


            <div class="input-group news-input">
                <input type="text" class="form-control" placeholder="Rumayshanoreen@gmail.com">
                <button class="btn btn-dark btn-lg" type="button">Button</button>
              </div>
        </div>
    </div>
</section>

<!--box-->
<section class="p-5">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">

                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-laptop"> </i>
                        </div>
                    <h3 class="card-title mb-3">Virtual</h3>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aut dolorum deserunt atque, magnam sed?
                    </p>
                    <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-secondary text-light">

                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-person-square"> </i>
                        </div>
                    <h3 class="card-title mb-3">Hybrid</h3>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aut dolorum deserunt atque, magnam sed?
                    </p>
                    <a href="" class="btn btn-dark">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card bg-dark text-light">

                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-people"> </i>
                        </div>
                    <h3 class="card-title mb-3">In Person</h3>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum aut dolorum deserunt atque, magnam sed?
                    </p>
                    <a href="" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--learn section-->

   <section id="learn" class="p-5">
       <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md">
                <img src="fundamentals.svg" class="img-fluid" alt="">
            </div>
            <div class="col-md p-5">
             <h2>Learn The Fundamentals</h2>
             <p class="lead">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                 Fugiat, placeat aut voluptatem doloribus doloremque iusto.
             </p>
             <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus perferendis alias quam quibusdam distinctio maiores nobis nulla sapiente, voluptates a, soluta libero optio enim vero deserunt sed non dolorum totam.
             </p>
             <a href="#" class="btn btn-light mt-3">
                <i class="bi bi-chevron-right"></i>Read More
             </a>
            </div>
        </div>
       </div>
   </section>

   <!--last section-->

   <section id="learn" class="p-5 bg-dark text-light">
    <div class="container">
     <div class="row align-items-center justify-content-between">
         
         <div class="col-md p-5">
          <h2>Learn React</h2>
          <p class="lead">
             Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Fugiat, placeat aut voluptatem doloribus doloremque iusto.
          </p>
          <p>
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus perferendis alias quam quibusdam distinctio maiores nobis nulla sapiente, voluptates a, soluta libero optio enim vero deserunt sed non dolorum totam.
          </p>
          <a href="#" class="btn btn-light mt-3">
             <i class="bi bi-chevron-right"></i>Read More
          </a>
         </div>
         <div class="col-md">
            <img src="react.svg" class="img-fluid" alt="">
        </div>
     </div>
    </div>
</section>


<!--Questions-->
  <section id="questions" class="p-5">
    <div class="container">
        <h2 class="text-center mb-4">
            Frequently Asked Questions
        </h2>
        <div class="accordion accordion-flush" id="questions">
            <!--item 1-->
            <div class="accordion-item">
              <h2 class="accordion-header"
               id="flush-headingOne">
                <button class="accordion-button collapsed"
                 type="button"
                  data-bs-toggle="collapse" 
                  data-bs-target="#question-one">
                  Your exact location?
                </button>
              </h2>
              <div id="question-one" class="accordion-collapse collapse"  data-bs-parent="#questions">
                <div class="accordion-body">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in adipisci veniam nemo, nulla odit quo at maxime voluptatum, dicta debitis, facere laudantium est aspernatur enim fuga facilis? Culpa aperiam harum ipsa dolorum corrupti, ad qui sint rerum nostrum laboriosam explicabo eaque cumque voluptatum fugit quidem quas earum distinctio illum.</div>
              </div>
            </div>
            <!--item 2-->
            <div class="accordion-item">
                <h2 class="accordion-header"
                 id="flush-headingOne">
                  <button class="accordion-button collapsed"
                   type="button"
                    data-bs-toggle="collapse"
                     data-bs-target="#question-two">
                    How much does it cost?
                  </button>
                </h2>
                <div id="question-two"
                 class="accordion-collapse collapse"
                   data-bs-parent="#questions">
                  <div class="accordion-body">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in adipisci veniam nemo, nulla odit quo at maxime voluptatum, dicta debitis, facere laudantium est aspernatur enim fuga facilis? Culpa aperiam harum ipsa dolorum corrupti, ad qui sint rerum nostrum laboriosam explicabo eaque cumque voluptatum fugit quidem quas earum distinctio illum.</div>
                </div>
              </div>
            <!--item 3-->
            <div class="accordion-item">
                <h2 class="accordion-header"
                 id="flush-headingOne">
                  <button class="accordion-button collapsed"
                   type="button"
                    data-bs-toggle="collapse"
                     data-bs-target="#question-three">
                        What do i need to know?
                  </button>
                </h2>
                <div id="question-three"
                 class="accordion-collapse collapse"
                   data-bs-parent="#questions">
                  <div class="accordion-body">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in adipisci veniam nemo, nulla odit quo at maxime voluptatum, dicta debitis, facere laudantium est aspernatur enim fuga facilis? Culpa aperiam harum ipsa dolorum corrupti, ad qui sint rerum nostrum laboriosam explicabo eaque cumque voluptatum fugit quidem quas earum distinctio illum.</div>
                </div>
              </div>
          <!--item 4-->
          <div class="accordion-item">
            <h2 class="accordion-header"
             id="flush-headingOne">
              <button class="accordion-button collapsed" 
              type="button" 
              data-bs-toggle="collapse"
               data-bs-target="#question-four">
                How do i sign up?
              </button>
            </h2>
            <div id="question-four" 
            class="accordion-collapse collapse"
              data-bs-parent="#questions">
              <div class="accordion-body">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in adipisci veniam nemo, nulla odit quo at maxime voluptatum, dicta debitis, facere laudantium est aspernatur enim fuga facilis? Culpa aperiam harum ipsa dolorum corrupti, ad qui sint rerum nostrum laboriosam explicabo eaque cumque voluptatum fugit quidem quas earum distinctio illum.</div>
            </div>
          </div>
          <!--item 5-->
          <div class="accordion-item">
            <h2 class="accordion-header" 
            id="flush-headingOne">
              <button class="accordion-button collapsed"
               type="button"
                data-bs-toggle="collapse"
                 data-bs-target="#question-five">
                Do you help me to find a job?
              </button>
            </h2>
            <div id="question-five"
             class="accordion-collapse collapse"
               data-bs-parent="#questions">
              <div class="accordion-body">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio in adipisci veniam nemo, nulla odit quo at maxime voluptatum, dicta debitis, facere laudantium est aspernatur enim fuga facilis? Culpa aperiam harum ipsa dolorum corrupti, ad qui sint rerum nostrum laboriosam explicabo eaque cumque voluptatum fugit quidem quas earum distinctio illum.</div>
            </div>
          </div>
    </div>
  </section>


<section id="instructors" class="p-5 bg-primary">
    <div class="container">
        <h2 class="text-center text-white">Our Instructors</h2>
        <p class="lead text-center text-white mb-5">
            Our instructors all have 10+years working as a web developer in the industry
        </p>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3"  alt="">
                       <h3 class="card-title mb-3">Tom Doe</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda obcaecati tempora neque, animi reiciendis.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3"  alt="">
                       <h3 class="card-title mb-3">Janny Doe</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda obcaecati tempora neque, animi reiciendis.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/men/13.jpg" class="rounded-circle mb-3"  alt="">
                       <h3 class="card-title mb-3">Steven Smith</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda obcaecati tempora neque, animi reiciendis.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card bg-light">
                    <div class="card-body text-center">
                        <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3"  alt="">
                       <h3 class="card-title mb-3">Sarah Smith</h3>
                       <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi assumenda obcaecati tempora neque, animi reiciendis.</p>
                        <a href=""><i class="bi bi-twitter text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-facebook text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-linkedin text-dark mx-1"></i></a>
                        <a href=""><i class="bi bi-instagram text-dark mx-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--contact and map-->

<section id="learn" class="p-5 bg-light text-light">
    <div class="container">
     <div class="row align-items-center justify-content-between">
         
         <div class="col-md p-5">
            <h2 class="text-center mb-4">Contact Info</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span> 50 Main st Boston MA
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enrollment Phone:</span> (555) 555-555
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Student Phone:</span> 50 Main st Boston MA
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Enrollment Email:</span> (555)enroll@frintend.test
                    </li>
                    <li class="list-group-item">
                        <span class="fw-bold">Main Location:</span> student@frontend.test
                    </li>
                </ul>
         </div>
         <div class="col-md">
        <p> 
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.381550471661!2d74.33114111463077!3d31.51367895462663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190460e97d35a9%3A0xb34cbe2044387a60!2sGaddafi%20Stadium!5e0!3m2!1sen!2s!4v1664431686787!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </p>
        </div>
     </div>
    </div>
</section>



<!--footer-->
<footer class="p-5 bg-dark text-white text-center position-relative">
  <div class="container">
    <p class="lead">Copyright &copy; 2022 Frontend Bootcamp</p>
    <a href="" class="position-absolute bottom-0 end-0 p-5">
        <i class="bi bi-arrow-up-circle h1"></i>
    </a>
  </div>
</footer>
   
<!-- Modal -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="lead">Fill out this form and we will get back to you</p>
          <form>
            <div class="div mb-3">
                <label for="first-name" class="col-form-label">
                    First Name:
                </label>
                <input type="text" class="form-control" id="last-name">
            </div>
            <div class="div mb-3">
                <label for="last-name" class="col-form-label">
                    Last Name:
                </label>
                <input type="text" class="form-control" id="email">
            </div>
            <div class="div mb-3">
                <label for="email" class="col-form-label">
                    Email:
                </label>
                <input type="text" class="form-control" id="phone:">
            </div> <div class="div mb-3">
                <label for="phone" class="col-form-label">
                    Phone:
                </label>
                <input type="text" class="form-control" id="first-name">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
  

   


</body>
</html>