<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 </title>
    <?php   include 'link/links.php';  ?>
    <?php   include 'css/style.php';  ?>
</head>
<body onload="fetch()">
  <!-- \\\\\\\\\\\\\\\\\\\\\\\ navbar \\\\\\\\\\\\\\\\\ -->
<nav  class="navbar navbar-expand-lg nav_style p-3 navbar-dark bg-dark ">
  <a class="navbar-brand pl-5 navl" href="#">COVID-19</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation ">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active ">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="worldcoronalive.php">WorldCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiadaywise.php">IndiaDayWise</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiacoronalive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>

 <div class="main_header">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="front/10.jpg" class="d-block w-100" alt="..." width="1400" height="400">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="front/8.jpg" class="d-block w-100" alt="..." width="1400" height="400" >
                <div class="carousel-caption d-none d-md-block"> 
                </div>
            </div>
            <div class="carousel-item">
                <img src="front/11.jpg" class="d-block w-100" alt="..." width="1400" height="400" >
                <div class="carousel-caption d-none d-md-block"> 
                
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <div class="rightside my-4">
      <h1>Let's Stay Safe & Fight Together Against Cor<span class="rotates"><img src="12.png" alt="" width="90" height="90"></span>na Virus </h1>
    </div>


<!-- ****************** ABOUT SECTION ******************** -->
<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>About COVID-19</h1>
  </div>
    <div class="row pt-5 ">
      <div class="col-lg-5 col-md-6 col-12 " >
         <img src="15.jpg" alt="" class="img-fluid" >
      </div>   
      <div class="col-lg-6 col-md-6 col-12 aboutss">
           <h2>What is COVID-19 (Corona-Virus)</h2>
          <p>Coronavirus disease (COVID-19) is an infectious disease caused by the SARS-CoV-2 virus.Most people infected with the virus will experience mild to moderate respiratory illness and recover without requiring special treatment.Older people and those with underlying medical conditions like cardiovascular disease, diabetes, chronic respiratory disease, or cancer are more likely to develop serious illness.</p>
          <p>The best way to prevent and slow down transmission is to be well informed about the disease and how the virus spreads. Protect yourself and others from infection by staying at least 1 metre apart from others, wearing a properly fitted mask, and washing your hands or using an alcohol-based rub frequently.</p>
      </div>
    </div>
</div>

<!-- ****************** CORONAVIRUS SYMPTOMOS ******************** -->

<div class="container-fluid pt-5 pb-5" id="sympid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Coronavirus Symptoms</h1>
  </div>
  <div class="container">
      <div class="row">

        <div class="col-lg-4  col-md-4 col-12 mt-5">  
          <figure class="text-center">
            <img src="symtoms/cough3.jpg" alt="" class="img-fluid bg-light" width="120" height="120" >
            <figcaption>Cough</figcaption>
            </figure>
        </div>

        <div class="col-lg-4  col-md-4 col-12 mt-5">  
          <figure class="text-center">
            <img src="symtoms/nosefunny2.jpg" alt="" class="img-fluid bg-light" width="120" height="120" >
            <figcaption>runny nose</figcaption>
            </figure>
        </div>

        <div class="col-lg-4  col-md-4 col-12 mt-5">  
          <figure class="text-center">
            <img src="symtoms/fever2.jpg" alt="" class="img-fluid bg-light" width="120" height="120" >
            <figcaption>fever</figcaption>
            </figure>
        </div>

        <div class="col-lg-4  col-md-4 col-12 mt-5">  
          <figure class="text-center">
            <img src="symtoms/cold3.png" alt="" class="img-fluid bg-light" width="120" height="120" >
            <figcaption>cold</figcaption>
            </figure>
        </div>

        <div class="col-lg-4  col-md-4 col-12 mt-5">  
          <figure class="text-center">
            <img src="symtoms/tiredness2.png" alt="" class="img-fluid bg-light" width="120" height="120" >
            <figcaption>tiredness</figcaption>
            </figure>
        </div>

        <div class="col-lg-4  col-md-4 col-12 mt-5">  
          <figure class="text-center">
            <img src="symtoms/difficult.png" alt="" class="img-fluid bg-light" width="120" height="120" >
            <figcaption>diffculty breathing (severe cases)</figcaption>
            </figure>
        </div>
      </div>
  </div>
  </div>


  <!-- ****************** CORONAVIRUS PREVENTION ******************** -->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>6 Steps Prevention Against Coronavirus</h1>
  </div>

  <div class="container"> 
           <div class="row">

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                       <div class="row">
                         <div class="col-lg-4 col-md-4 col-12">
                             <figure class="text-center">
                                   <img src="prevention/washhand5.jpg" alt="" class="img-fluid bg-light" width="90"  height="90" >
                             </figure>
                         </div>
                         <div class="col-lg-8 col-md-8 col-12" >
                          <p> Washyour hands regularly for 20 seconds, with soap and water or alcohol-based hand rub </p>
                         </div>
                       </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                       <div class="row">
                         <div class="col-lg-4 col-md-4 col-12">
                             <figure class="text-center">
                                   <img src="prevention/coverface.jpg" alt="" class="img-fluid bg-light" width="90"  height="90" >
                             </figure>
                         </div>
                         <div class="col-lg-8 col-md-8 col-12" >
                          <p> Cover your nose mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
                         </div>
                       </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                       <div class="row">
                         <div class="col-lg-4 col-md-4 col-12">
                             <figure class="text-center">
                                   <img src="prevention/closs.png" alt="" class="img-fluid bg-light" width="90"  height="90" >
                             </figure>
                         </div>
                         <div class="col-lg-8 col-md-8 col-12" >
                          <p> Avoid close contact (1 meter or 3 feet) with people who are unwell </p>
                         </div>
                       </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                       <div class="row">
                         <div class="col-lg-4 col-md-4 col-12">
                             <figure class="text-center">
                                   <img src="prevention/stayhome.jpg" alt="" class="img-fluid bg-light" width="90"  height="90" >
                             </figure>
                         </div>
                         <div class="col-lg-8 col-md-8 col-12" >
                          <p> Stay home and self-isolate from others in the household if you feel unwell </p>
                         </div>
                       </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                       <div class="row">
                         <div class="col-lg-4 col-md-4 col-12">
                             <figure class="text-center">
                                   <img src="prevention/stay informed.png" alt="" class="img-fluid bg-light" width="90"  height="90" >
                             </figure>
                         </div>
                         <div class="col-lg-8 col-md-8 col-12" >
                          <p>Stay informed by watching news & follow the recommended practicals</p>
                         </div>
                       </div>
                  </div>

                  <div class="col-lg-4 col-md-4 col-12 mt-5">
                       <div class="row">
                         <div class="col-lg-4 col-md-4 col-12">
                             <figure class="text-center">
                                   <img src="prevention/medicalcare.png" alt="" class="img-fluid bg-light" width="90"  height="90" >
                             </figure>
                         </div>
                         <div class="col-lg-8 col-md-8 col-12" >
                          <p> If you have fever, cough and difficulty breathing, seek medical care early </p>
                         </div>
                       </div>
                  </div>
           </div>
  </div>
  </div>


<!-- ****************** CONTACT US   ******************** -->
  
<div class="container-fluid pt-5 pb-5" id="contactid">
  <div class="section_header text-center mb-5 mt-4">
    <h1>Contact Us ASAP</h1>
  </div>
    <div class="container">
      <div class="row"> 
          <div class="col-lg-8 offset-lg-2 col-12">
  <form   action="" method="POST">
          <div class="mb-3">
             <label  class="form-label">username</label>
             <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required >
          </div>

          <div class="mb-3">
             <label class="form-label">Email </label>
             <input type="email" class="form-control" name="email"  placeholder="name@example.com"autocomplete="off" required  >
          </div>
         
          <div class="mb-3">
             <label  class="form-label">mobile</label>
             <input type="number" class="form-control" name="mobile" placeholder="mobile" autocomplete="off" required >
          </div> 

          <div class="mb-3">
               <label> Select Symptoms</label>
            
               <div class="custome-control custome-checkbox custome-control-inline text-capitalize"> 
                    <input type="checkbox"  class="custome-control-input" id="customecheckbox1" name="coronasym[]" value="cold">
                    <label class="cusome-control-label" for="customecheckbox1">Cold</label> 
               </div>

               <div class="custome-control custome-checkbox custome-control-inline text-capitalize"> 
                    <input type="checkbox"  class="custome-control-input" id="customecheckbox2" name="coronasym[]" value="fever">
                    <label class="cusome-control-label" for="customecheckbox2">Fever</label> 
               </div>

               <div class="custome-control custome-checkbox custome-control-inline text-capitalize"> 
                    <input type="checkbox"  class="custome-control-input" id="customecheckbox3" name="coronasym[]" value="breath problem">
                    <label class="cusome-control-label" for="customecheckbox3">Difficulty in breath</label> 
               </div>

               <div class="custome-control custome-checkbox custome-control-inline text-capitalize"> 
                    <input type="checkbox"  class="custome-control-input" id="customecheckbox4" name="coronasym[]" value="feeling tired">
                    <label class="cusome-control-label" for="customecheckbox4">Feeling Weak</label> 
               </div>
          </div>

        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Describe how you are feeling </label>
       <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="msg"></textarea>
         </div>

         <button type="submit" class="btn btn-primary" name="summit">Submit</button>
</form>

      </div>
    </div>
  </div>
</div>

<!-- //////////////////// top cursor ///////////// -->
   
 <div class="container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
 </div>

<!-- ******************* FOTTER ******************** -->
   <footer class="mt-5">
     <div class="footer_style text-white text-center container-fluid">
       <p>@Copyright by PradeepMondal</p>
     </div>
   </footer>

<!-- //////////////////top Cursor////////////////// -->
<script type="text/javascript">

  $('.count').counterUp({
      delay:10,
      count:3000
  })


   mybutton = document.getElementById("myBtn");
   //when the user scrolls down 20px from the top of the document, show the button
   window.onscroll = function() {scrollFunction()};
   function scrollFunction(){
     if (document.documentElement.scrollTop > 100){
             mybutton.style.display = "block";
         }else{
           mybutton.style.display = "none"
         }
   }
    //when the user click on the button, scroll to the top of the element 
    function topFunction(){
     // document.body.scrollTop = 0; //For Safari
      document.documentElement.scrollTop = 0; // for .chrome , .firefox, .IE.and.Opera
    }
</script>

</body>
</html>



<?php
include "dbcon.php";
if(isset($_POST['summit']))
{ $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $symp=$_POST['coronasym'];
  $msg=$_POST['msg'];

$chk="";
foreach($symp as $chk1){
  $chk .= $chk1.",";
}

$insertquery="insert into coronacase(username,email,mobile,symp,message) values('$username','$email','$mobile','$chk','$msg')";

$query= mysqli_query($con,$insertquery);
if($query)
 { ?>
     <script>
       alert("Thankyou for informing Us, do WEAR A MASK and maintaing a DISTANCE");
     </script> 
     <?php
 }
 else{
      ?>
       <script>
         alert("data not inserted");
       </script> 
   <?php
    }
}
?>