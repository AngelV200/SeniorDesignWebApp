<?php
// Start Session
session_start();

// Check if the user is not authenticated
if (!isset($_SESSION['username'])) {
header("Location: login.html");
exit();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Arcade Warp Zone</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.ico">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
  <body>
    <div class=header>
      <div class="logo">
        <a id="logo" href="dashboard.php"><img src="images/logo.png" alt="logo"></a>
      </div>
      <div class="navbar">
        <a href="dashboard.php">User Dashboard</a>
        <a href="logout.php">Logout</a>
      </div>
    </div>
    <div id="background-container">
        <video autoplay muted loop playsinline>
            <source src="/videos/stars.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="game-selection">
        <!-- Game 1 -->
        <div class="game">
            <h1>Pong</h1>
            <a href="./games/pong/pong.php"><img src="/images/title_images/pong.png" alt="pong_game"></a>
        </div>

        <!-- Game 2 -->
        <div class="game">
            <h1>Snake Apple Eater</h1>
            <a href="./games/snake/snake.php"><img src="images/title_images/snake.png" alt="snake_game"></a>
        </div>

        <!-- Game 3 -->
        <div class="game">
            <h1>Puppy Jump</h1>
            <a href="./games/jump/jump.php"><img src="/images/title_images/puppy_jump.png" alt="puppy_jump_game"></a>
        </div>

        <!-- Game 4 -->
        <div class="game">
            <h1>Tetris DX</h1>
            <a href="games/tetris_dx/tetris_dx.php"><img src="images/title_images/tetris_dx.png" alt="tetris_dx_game"></a>
        </div>

        <!-- Game 5 -->
        <div class="game">
            <h1>Pac-Man</h1>
            <a href="games/pacman/pacman.php"><img src="images/title_images/pacman.png" alt="game_image"></a>
        </div>

        <!-- Game 6 -->
        <div class="game">
            <h1>Brick</h1>
            <a href="./games/brick/brick.php"><img src="images/game_image.png" alt="game_image"></a>
        </div>

        <!-- Game 7 -->
        <div class="game">
            <h1>Game Title 7</h1>
            <a href="#top"><img src="images/game_image.png" alt="game_image"></a>
        </div>

        <!-- Game 8 -->
        <div class="game">
            <h1>Game Title 8</h1>
            <a href="#top"><img src="images/game_image.png" alt="game_image"></a>
        </div>

        <!-- Game 9 -->
        <div class="game">
            <h1>Game Title 9</h1>
            <a href="#top"><img src="images/game_image.png" alt="game_image"></a>
        </div>

        <!-- Game 10 -->
        <div class="game">
            <h1>Game Title 10</h1>
            <a href="#top"><img src="images/game_image.png" alt="game_image"></a>
        </div>

    </div>
  </body>
</html>