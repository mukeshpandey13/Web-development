 <?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hangman Game</title>
    <link rel="stylesheet" href="style1.css">
    <script src="./word-list.js" defer></script>
    <script src="./script.js" defer></script>
    <style>



        
    </style>
</head>

<body>
   

    <!--  navBar  -->
    <div class="topnav">
        <a class="active" href="#home">Home</a>
        <!-- <a href="#contact">Contact</a> -->
        <a href="#about">About</a>
        <a href="logout.php" class="btn btn-warning">Exit Game</a>
      </div>
    


    <div class="game-modal">
        <div class="content">
            <img src="#" alt="gif">
            <h4>Game Over!</h4>
            <p>The correct word was: <b>rainbow</b></p>
            <button class="play-again">Play Again</button>
        </div>
    </div>
    <div class="container">
        <div class="hangman-box">
            <img src="#" draggable="false" alt="hangman-img">
            <h1>Hangman Game</h1>
        </div>
        <div class="game-box">
            <ul class="word-display"></ul>
            <h4 class="hint-text">Hint: <b></b></h4>
            <h4 class="guesses-text">Incorrect guesses: <b></b></h4>
            <div class="keyboard"></div>
        </div>
    </div>
    
</body>

</html>