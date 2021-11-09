<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 </title>
    <?php   include 'link/links.php'; ?>
    <?php   include 'css/style.php'; ?>
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


    <!-- ******************  CORONA LATEST UPDATES  ******************** -->


    <section class="corona_update container-fluid">
   <div class="mb-4"> 
  <h3 class="text-uppercase text-center mt-5 ">COVID-19 LIVE UPDATES OF THE WORLD</h3>
   </div>
<div class="d-flex justify-content-around align-item-center count_style">
   <div class="table-responsive">
       <table class="table table-bordered table-striped text-center " id="tbval">
         <tr>
           <th>Country</th>
           <th>TotalConfirmed</th>
           <th>TotalRecovery</th>
           <th>TotalDeath</th>
           <th>NewDeath</th>
           <th>NewRecovery</th>
           <th>NewDeath</th>
         </tr>
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

     //////////////////API USING JQUERY//////////////////
function fetch(){
    $.get("https://api.covid19api.com/summary",
       function (data){
          // console.log(data['countries'].length);
          var tbval=document.getElementById('tbval');
           
            for(var i=1; i<(data['Countries'].length);i++)
                { var x =tbval.insertRow();
                  x.insertCell(0);

                  tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                  tbval.rows[i].cells[0].style.background='#7a4a91';
                  tbval.rows[i].cells[0].style.color='#fff';

                  x.insertCell(1);
                  tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                  tbval.rows[i].cells[1].style.background='#4bb7d8';

                  x.insertCell(2);
                  tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                  tbval.rows[i].cells[2].style.background='#4bb7d8';

                  x.insertCell(3);
                  tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                  tbval.rows[i].cells[3].style.background='#f36e23';

                  x.insertCell(4);
                  tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                  tbval.rows[i].cells[4].style.background='#4bb7d8';

                  x.insertCell(5);
                  tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                  tbval.rows[i].cells[5].style.background='#9cc850';

                  x.insertCell(6);
                  tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                  tbval.rows[i].cells[6].style.background='#f36e23';
                }
       }
     );
}
</script>

</body>
</html>

