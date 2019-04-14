<?php
    if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
        $authenticated = true;
    } else {
        $authenticated = false;
    }

    if (isset($_POST['game'], $_POST['rating'], $_POST['comment']))
    {
        if ((int) $_POST['rating'] >= 1 && (int) $_POST['rating'] <= 5)
        {
            require_once $_SERVER['DOCUMENT_ROOT'] . '/zocker_knaelter/database.inc.php';

            $userId =  mysqli_real_escape_string($link, $_SESSION['userId'] );
            $gameId = mysqli_real_escape_string($link, $_POST['game']);
            $rating = mysqli_real_escape_string($link, $_POST['rating']);
            $comment = mysqli_real_escape_string($link, $_POST['comment']);

            $result = $link->query("INSERT INTO `tbl_user_game_rating`(`user_id`, `game_id`, `rating`, `comment`) VALUES ('$userId', '$gameId', '$rating', '$comment')");
        }
    }
?>