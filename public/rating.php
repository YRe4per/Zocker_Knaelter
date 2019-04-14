<?php
  session_start();

  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/rating.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_head.php'; ?>
  </head>
  <body>
    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_nav.php'; ?>

    <main>
      <?php if (isset($result)) { ?>
        <?php if ($result) {
            header('location: /Zocker_Knaelter/public/game.php?id=' . $_POST['game']);
        } else if (!$result) { ?>
            <p>Rating could not been saved.</p>
        <?php } ?>
      <?php } else if ($authenticated) { ?>
      <div class="frm">
          <form action="rating.php" method="POST">
              <input type="hidden" name="game" value="<?= $_GET['game'] ?>">
              <p>
              <label>Rating:</label>
              <input type="number" step="1" min="1" max="5" value="5" name="rating">
              </p>
              <p>Comment:</p>
              <textarea style="width: 75%;height: 128px;"type="text" id="comment" name="comment"></textarea>
              <p>
              <input type="submit" id="btn" value="submit">
              </p>
          </form>
      </div>
      <?php } else { ?>
        <br>
        <p class="center"><a href="login.php">Sign in</a> to write a rating</p>
      <?php } ?>

    </main>

    <?php  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/_footer.php'; ?>
  </body>
</html>