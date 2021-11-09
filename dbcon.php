
<?php
// $server='localhost';
// $user='root';
// $password='';
// $db='coronademo';

$server='remotemysql.com';
$user='A7O2q5rAbX';
 $password='yTbfWGezef';
 $db='A7O2q5rAbX';


$con= mysqli_connect($server,$user,$password,$db);
if($con){
    ?>
     <script>
    //     alert("connection successfull");
     </script>
     <?php
}
else
{?>
    <script>
        alert(" no connection");
    </script>
    <?php
}


?>
