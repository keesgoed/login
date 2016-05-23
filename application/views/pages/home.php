<?php

if(isset($_SESSION['logged_in'])){
 echo '<button><a href="login/logout">Uitloggen</a></button>';
}else{
 echo '<button><a href="login/login">Login</a></button>';
}
echo '<br>';
$this->Auth->getUser();

 ?>