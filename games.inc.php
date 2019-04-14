<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/database.inc.php';

  $query = mysqli_query($link, "SELECT `id`, `name`, `description`, `gametype_id`, `publicationdate`, `usk`, `language`, `image`, (SUM(`ugr`.`rating`) / COUNT(`ugr`.`game_id`)) as `averageRating` FROM `tbl_game` `g` LEFT JOIN `tbl_user_game_rating` `ugr` ON `g`.`id` = `ugr`.`game_id` GROUP BY `g`.`id`");

  $games = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>