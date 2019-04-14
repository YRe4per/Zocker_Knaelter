<?php
  if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    $authenticated = true;
  } else {
    $authenticated = false;
  }

  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/database.inc.php';

  if (isset($_GET['search']) && !empty($_GET['search'])) {

  $search = mysqli_real_escape_string($link, $_GET['search']);

  $query_games = mysqli_query($link, "SELECT `id`, `name`, `description`, `gametype_id`, `publicationdate`, `usk`, `language`, `image`, (SUM(`ugr`.`rating`) / COUNT(`ugr`.`game_id`)) as `averageRating` FROM `tbl_game` `g` LEFT JOIN `tbl_user_game_rating` `ugr` ON `g`.`id` = `ugr`.`game_id` WHERE `name` LIKE '%$search%' GROUP BY `g`.`id`");

  $games = mysqli_fetch_all($query_games, MYSQLI_ASSOC);

  $query_consoles = mysqli_query($link, "SELECT `g`.`id`, `g`.`name`, `g`.`description`, `g`.`image`, ( SUM(`ugr`.`rating`) / COUNT(`ugr`.`game_id`) ) AS `averageRating` FROM `tbl_console` `c` LEFT JOIN `game_2_console` `g2c` ON `c`.`id` = `g2c`.`tbl_console_id` LEFT JOIN `tbl_game` `g` ON `g2c`.`tbl_game_id` = `g`.`id` LEFT JOIN `tbl_user_game_rating` `ugr` ON `g`.`id` = `ugr`.`game_id` WHERE `c`.`name` LIKE '%$search%' AND `g2c`.`tbl_game_id` IS NOT NULL GROUP BY `g`.`id`");

  $consoles = mysqli_fetch_all($query_consoles, MYSQLI_ASSOC);

  } else {
    header('location: /Zocker_Knaelter/public/index.php');
  }
?>