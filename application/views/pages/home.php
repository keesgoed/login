<?php

if(isset($_SESSION['logged_in'])){
 echo '<button><a href="logout">Uitloggen</a></button>';
}else{
 echo '<button><a href="login">Login</a></button>';
}

echo '<br>';
$this->Auth->getUser();
echo '<br>';
 ?>