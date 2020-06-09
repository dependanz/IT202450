<?php
    if(isset($_SESSION['user'])){
        $logreg = "profile";
    }else{
        $logreg = "login/register";
    }
?>

<head>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Space+Mono">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/surveys.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<div class="header">
    <a href="index.php" class="logo">a e s t h e t i c u s</a>
    <div class="header-right">
        <a href="index.php" data-target="home" class="active">home</a>
        <a href="#" data-target="outfits">outfits</a>
        <?php echo '<a href="#" data-target="'.$logreg.'">'.$logreg.'</a>'?>
    </div>
</div>