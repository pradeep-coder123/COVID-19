
<style  type="text/css">
html{
    scroll-behavior:smooth;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: 'Ubuntu', sans-serif;
}
.row{
    margin-left:0 !important;
    margin-right:0 !important
}
.nav_style
{ background-color: #7a7ae1 !important;
    font-family: 'Ubuntu', sans-serif;
    
}
.nav_style a
{ color:white;
  
}

.nav_style div ul li a
{ font-weight:bold;
  font-size:15px;
}

.navl{
    font-size:2rem;
    font-weight:bold;
    font-family: "Gotham A","Gotham B";
}
.rightside{ display:flex;
  justify-content:center;
  align-items:center;
  font-family: "Gotham A","Gotham B" !important;
  
}
.rightside h1{
    font-size:3rem;
 font-weight:bold;
 font-family: "Gotham A","Gotham B" !important;
}
.rotates img{
    animation:rotatess 2s linear infinite ;
}
@keyframes rotatess{ 
100% { transform: rotate(360deg);}
}
/****************** CORONA UPDATES****************** */

.corona_update{    
 margin:10px 0 30px 0;

}
.corona_update h3 {    
 color:#ff7675;
 font-size:2rem;
 font-weight:bold;

}
.corona_update h1{    
 font-size:2rem;
 text-align:center;
}

.sub_section{
    background-color: #f8f9fa;
}
.section_header h1{
    font-family: "Gotham A","Gotham B" !important;
    font-weight:bold;
}

/* ******************* FOTTER ****************** */
.footer_style{
    background-color:#7a7ae1 !important;
} 
.footer_style p{
   margin-bottom:0 !important;
}

/* ******************** arrow button ****************** * */
#myBtn{
  display:none;
  position: fixed;
  bottom:30px;
  right:40px;
  z-index:99; /* make sure it does not overlap */ 
  border:none;
  background-color:#00A8FF; 
  color:white;
  cursor:pointer;
  padding: 10px;
  border-radius: 10px; /* rounder corner */
}
#myBtn:hover{
    /* add a dark-grey backgrounds on hover */
    background: #606060;   
}

/* ///////////////// responsive ////////////////// */

@media (max-width:768px){
 .count_style{
     display:inline !important;
 }
 .count_style p {
     text-align:center;
 }
.rightside h1{
    display:flex;
    flex-direction:column;
    text-align:center;
     justify-content:center;
     align-items:center;
}
.aboutss h2,p{
    display:flex;
    flex-direction:column;
    text-align:center;
     justify-content:center;
     align-items:center;
}
}


</style>