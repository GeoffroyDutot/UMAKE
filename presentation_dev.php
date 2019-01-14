<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Blog IMIE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_navbar.css">
    <link rel="stylesheet" href="css/style_footer.css">

</head>

<body>


<?php include("navbar.php"); ?>
<!--corps de la page------->
   <center><p><h1>L'actualité de la section DEV ! </h1></center> </p>
<?php include("trier_articles.php"); ?>
<?php include("block_articles.php"); ?>


<!--pied de page--------->

<?php include("footer.php"); ?>

</body>

</html>
