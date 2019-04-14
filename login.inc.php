<?php
  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    $authenticated = true;
  } else {
    $authenticated = false;
  }
  
  if (isset($_POST['username'], $_POST['password']))
  {

    require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/database.inc.php';
    
    //password_hash("password", PASSWORD_DEFAULT);

    $username = mysqli_real_escape_string($link, $_POST['username']);
    
    $query = mysqli_query($link, "SELECT `id`, `username`, `password`, `registered`, `email`, `picture` FROM `tbl_user` WHERE `username` = '$username'");
    
    $user = $query->fetch_assoc();

    $_SESSION['authenticated'] = false;

    if ($_POST['username'] == $user['username'] && password_verify($_POST['password'], $user['password']))
    {
      $_SESSION['userId'] = $user['id'];
      $_SESSION['authenticated'] = true;
      $authenticated = true;
    }
  }

  if (isset($_POST['logout']))
  {
    session_destroy();

    $authenticated = false;
  }
?>