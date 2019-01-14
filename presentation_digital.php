<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Blog IMIE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_navbar.css">
    <link rel="stylesheet" href="css/style_footer.css">
    <link rel="stylesheet" href="css/to-top.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="js/to-top.js"></script>

</head>

<body>


<?php include("navbar.php"); ?>
<!--corps de la page------->
  <center><p><h1>L'actualité de la section DIGI ! </h1></center> </p>
  <?php include("trier_articles_digi.php"); ?>
  <?php include("block_articles.php"); ?>
  <?php include("to-top.php"); ?>
<!--pied de page--------->

<?php include("footer.php"); ?>

</body>

</html>
