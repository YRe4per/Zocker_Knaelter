<?php
  session_start();

  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/top-rated-games.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_head.php'; ?>
  </head>
  <body>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_nav.php'; ?>
      
    <main>
      <p>
        <a class="btn btn-outline-success" href="games.php">All games</a>
      </p>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th style="width: 1px;">Bild</th>
            <th>Name</th>
            <th>Description</th>
            <th>Rating</th>
            <th>-></th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($games as $game) {
              $id = $game['id'];
              $name = $game['name'];
              $description = $game['description'];
              $averageRating = number_format($game['averageRating'], 2);
              $image = $game['image'];
              
              echo "
                <tr>
                  <td>#$id</td>
                  <td><img style=\"width: 250px;\" src=\"$image\"></td>
                  <td>$name</td>
                  <td>$description</td>
                  <td>$averageRating</td>
                  <td><a href=\"game.php?id=$id\">-></td>
                </tr>
              ";
            }
          ?>
        </tbody>
      </table>
    </main>

    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_footer.php'; ?>
  </body>
</html>