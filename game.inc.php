<?php
  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    $authenticated = true;
  } else {
    $authenticated = false;
  }

  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/database.inc.php';

  if (isset($_GET['id'])) {

  $id = mysqli_real_escape_string($link, $_GET['id']);

  $query_game = mysqli_query($link, "SELECT `game`.`id`, `game`.`name`, `game`.`description`, `gametype`.`type`, `gametype`.`description` as `gametypedescription`, `gametype_id`, `publicationdate`, `usk`, `language`, `image` FROM `tbl_game` `game` LEFT JOIN `tbl_gametype` `gametype` ON `game`.`gametype_id` = `gametype`.`id` WHERE `game`.`id` = '$id' LIMIT 1");

  $game = $query_game->fetch_assoc();

  $query_consoles = mysqli_query($link, "SELECT`gc`.`tbl_game_id`, `gc`.`tbl_console_id`, `gc`.`price`, `c`.`name` FROM `game_2_console` `gc` LEFT JOIN `tbl_console` `c` ON `gc`.`tbl_console_id` = `c`.`id` WHERE `gc`.`tbl_game_id` = '$id'");

  $consoles = mysqli_fetch_all($query_consoles, MYSQLI_ASSOC);

  $query_ratings = mysqli_query($link, "SELECT `user_id`, `game_id`, `rating`, `comment`, `user`.`username` FROM `tbl_user_game_rating` `uGR` LEFT JOIN `tbl_user` `user` ON `uGR`.`user_id` = `user`.`id` WHERE `game_id` = '$id'");

  $ratings = mysqli_fetch_all($query_ratings, MYSQLI_ASSOC);

  $userId = $_SESSION['userId'] ?? null;

  } else {
    header('location: /Zocker_Knaelter/public/games.php');
  }
?>