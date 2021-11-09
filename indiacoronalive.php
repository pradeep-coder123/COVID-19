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
<nav class="navbar navbar-expand-lg nav_style p-3 navbar-dark bg-dark">
  <a class="navbar-brand pl-5 navl" href="#">COVID-19</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation ">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a  style="border:2px solid white; width:120px; text-align:center;" class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>


 <!-- ******************  CORONA INDIA LIVE  UPDATES  ******************** -->


 <section class="corona_update container-fluid">
   <div class="my-5"> 
  <h3 class="text-uppercase text-center mt-5 ">COVID-19 LIVE UPDATES OF THE INDIA</h3>
   </div>
<div class="d-flex justify-content-around align-item-center count_style">
   <div class="table-responsive">
       <table class="table table-bordered table-striped text-center ">
         <tr>
           <th class="text-capitalize">Lastupdatetime</th>
           <th class="text-capitalize">State</th>
           <th class="text-capitalize">Confirmed</th>
           <th class="text-capitalize">Active</th>
           <th class="text-capitalize">Recovered</th>
           <th class="text-capitalize">Deaths</th>
         </tr>
 <?php
$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);
            //print_r($coronalive);


$statescount = count($coranalive['statewise']);  // total how many staes data we are geeting
$i=1;
while($i < $statescount){
       
    ?>
  
  <tr>
      <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
      <td><?php echo $coranalive['statewise'][$i]['state']  ?></td>
      <td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
      <td><?php echo $coranalive['statewise'][$i]['active']  ?></td>
      <td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
      <td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
  </tr>
  <?php
  $i++;
}
?>

       </table>
   </div>
</div>
</section>




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

