<?php
  session_start();

  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/game.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_head.php'; ?>
  </head>
  <body>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_nav.php'; ?>

    <main>
      <div class="game-image" style="background-image: url('<?= $game['image']?>');"></div>

      <h1><?= $game['name']?></h1>
      <p><?= $game['description']?></p>

      <p>publicationdate: <?= $game['publicationdate'] ?></p>
      <p>USK: <?= $game['usk'] ?></p>
      <p>Languages: <?= $game['language'] ?></p>
      <hr>
      <p>Type: <?= $game['type'] ?></p>
      <p>Type Description: <?= $game['gametypedescription'] ?></p>
      <hr>
      <p>Platforms:</p>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($consoles as $console) {
              $name = $console['name'];
              $price = $console['price'];
              
              echo "
                <tr>
                  <td>$name</td>
                  <td>$price &euro;</td>
                </tr>
              ";
            }
          ?>
        </tbody>
      </table>
      <hr>
      <p>Ratings:</p>
      <table>
        <thead>
          <tr>
            <th>User</th>
            <th>Rating</th>
            <th>Comment</th>
          </tr>
        </thead>
        <tbody>
          <?php
            foreach ($ratings as $rating) {
              $user = $rating['username'];
              $points = $rating['rating'];
              $comment = $rating['comment'];

              echo "
                <tr>
                  <td>$user</td>
                  <td>$points / 5</td>
                  <td>$comment</td>
                </tr>
              ";
            }
          ?>
        </tbody>
      </table>

      <?php if (false === array_search($userId, array_column($ratings, 'user_id'))) { ?>
        <?php if ($authenticated) { ?>
          <br>
          <p class="center"><a href="rating.php?game=<?= $game['id']?>">Write rating.</a></p>
        <?php } else { ?>
          <br>
          <p class="center"><a href="login.php">Sign in</a> to write a rating.</p>
        <?php } ?>
      <?php } else { ?>
        <br>
        <p class="center">You already wrote a rating.</p>
      <?php } ?>
    </main>

    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_footer.php'; ?>
  </body>
</html>