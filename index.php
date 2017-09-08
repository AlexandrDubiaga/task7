<?php
include ('config.php');
include ('libs/Controller.php');
include ('libs/Model.php');
include ('libs/View.php');


try
{
  $obj = new Controller();
}
catch(Exception $e)
{
  echo $e->getMessage();	           
}





