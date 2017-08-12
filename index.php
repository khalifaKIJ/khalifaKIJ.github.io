<?php

extract ($_POST);
if(isset($number)){
// Fetching variables of the form which travels in URL
//$number = $_NUMBER['number'];
if($number =='1')
{
header("Location:http://google.com");
}

else if ($number =='2')
{
header("Location:http://youtube.com");
}
/*
else if ($number =='')
{
header("Location:");
}
*/



else
{
  echo'<span"><div align="center"> Invalid Number: <Br/></div>'.$number.' </span> <br> ';
  echo  '<button onclick="history.go(-1);">Back </button>';

}



}
else{
?><span><?php echo "Please fill all fields!";?></span> <?php
}

?>
