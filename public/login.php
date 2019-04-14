<?php
  session_start();

  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/login.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_head.php'; ?>
  </head>
  <body>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_nav.php'; ?>

    <main>
      <?php 
        if ($authenticated) {
      ?>
        <form action="login.php" method="POST">
          <p class="center">You are already signed in.</p>    
          <p class="center">
            <input type="submit" id="logout" name="logout" value="logout">
          </p>
        </form>
      <?php 
        } else {
      ?>
      <div class="frm">
          <form action="login.php" method="POST">
              <p>
              <label>Username:</label>
              <input type="text" id="username" name="username">
              </p>
              <p>
              <label>Password:</label>
              <input type="password" id="password" name="password">
              </p>
              <p>
              <input type="submit" id="btn" value="Login">
              </p>
          </form>
      </div>
      <?php 
        }
      ?>
    </main>
    
    <p class="center">username : password</p>
    <p class="center">yannis   : password</p>

    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_footer.php'; ?>
  </body>
</html>