<?php

if(isset($_POST['name']))
    {
    echo $_POST['login'] . "<br>";


}

echo $_SERVER['HTTP_USER_AGENT'];

?>


<form method="POST">    
    <input name="login">
    <input type="submit" name="name">
      
</form>
