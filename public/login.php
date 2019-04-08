<!DOCTYPE html>
<html>

<link rel="stylesheet" href="/Zocker_Knaelter/public/asset/css/style.css">

  
  <head>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/Zocker_Knaelter/public/asset/css/style.css">
  </head>
  <body>
    <!-- nav -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">Zocker_Knaelter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Regestrieren.php">Registrieren</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Games
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Beliebteste</a>
              <a class="dropdown-item" href="#">Neuste</a>
              <a class="dropdown-item" href="#">Unsere Empfehlungen</a>
            </div>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!-- overview, welcome, ... -->

    <div class="frm">
        <form action="process.php" method="POST">
            <p>
            <label>Username:</label>
            <input type="text" id="user" name="user"    />
            </p>
            <p>
            <label>Password:</label>
            <input type="password" id="pass" name="pass"    />
            </p>
            <p>
            <input type="submit" id="btn" value="Login"    />
            </p>
        </form>
    </div>
</body>
</html>