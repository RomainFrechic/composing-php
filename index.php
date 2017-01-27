<?php 
require_once('composing.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/g/react@15.4.1,semantic-ui@2.2.6">
	<title>Composing</title>
</head>
<body>
	<div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="<?php echo $data[1][5]; ?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $data[1][0]; ?></div>
      <div class="meta">
        <a><?php echo $data[1][2]; ?></a>
      </div>
      <div class="description"><?php echo $data[1][3]; ?> </div>
    </div>
    <div class="extra content">
      <span class="right floated">Born in <?php echo $data[1][1]; ?></span>
    </div>
  </div>


  
</div>


</body>
</html>