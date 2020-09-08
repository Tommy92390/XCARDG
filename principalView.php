<?php session_start(); ?>
<!DOCTYPE HTML> 
<html>
<head>
	<title>Article</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
</nav>
    <h1>XCARDG</h1>
    <div class="heading">$heading</div>
    <div class="advertising">
      <?php foreach($ad as $element){
        echo '<strong>'.$element['enterprise'].': </strong>'.$element['content'];
      }
      ?>
    </div>
</body>
<footer>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt maiores nisi numquam cumque labore officia aperiam quod accusantium! Amet, maxime perferendis repellat ipsum quo tempore necessitatibus eligendi eius at molestiae.</footer>
</html>