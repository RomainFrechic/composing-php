<?php 
require_once('composing.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.min.css">
	<title>Composing</title>
</head>
<body>

	<div class="ui grid">
	<div class="ui link cards">
  <div class="two wide column"></div>
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


  <div class="two wide column"></div>
  <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="<?php echo $data[2][5]; ?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $data[2][0]; ?></div>
      <div class="meta">
        <a><?php echo $data[2][2]; ?></a>
      </div>
      <div class="description"><?php echo $data[2][3]; ?> </div>
    </div>
    <div class="extra content">
      <span class="right floated">Born in <?php echo $data[2][1]; ?></span>
    </div>
  </div>
  </div>

<div class="two wide column"></div>
  <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="<?php echo $data[3][5]; ?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $data[3][0]; ?></div>
      <div class="meta">
        <a><?php echo $data[3][2]; ?></a>
      </div>
      <div class="description"><?php echo $data[3][3]; ?> </div>
    </div>
    <div class="extra content">
      <span class="right floated">Born in <?php echo $data[3][1]; ?></span>
    </div>
  </div>
  </div>

<div class="two wide column"></div>
  <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="<?php echo $data[4][5]; ?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $data[4][0]; ?></div>
      <div class="meta">
        <a><?php echo $data[4][2]; ?></a>
      </div>
      <div class="description"><?php echo $data[4][3]; ?> </div>
    </div>
    <div class="extra content">
      <span class="right floated">Born in <?php echo $data[4][1]; ?></span>
    </div>
  </div>
  </div>

<div class="two wide column"></div>
  <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="<?php echo $data[5][5]; ?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $data[5][0]; ?></div>
      <div class="meta">
        <a><?php echo $data[5][2]; ?></a>
      </div>
      <div class="description"><?php echo $data[5][3]; ?> </div>
    </div>
    <div class="extra content">
      <span class="right floated">Born in <?php echo $data[5][1]; ?></span>
    </div>
  </div>
  </div>

<div class="two wide column"></div>
  <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="<?php echo $data[6][5]; ?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $data[6][0]; ?></div>
      <div class="meta">
        <a><?php echo $data[6][2]; ?></a>
      </div>
      <div class="description"><?php echo $data[6][3]; ?> </div>
    </div>
    <div class="extra content">
      <span class="right floated">Born in <?php echo $data[6][1]; ?></span>
    </div>
  </div>
  </div>

<div class="two wide column"></div>
  <div class="ui link cards">
  <div class="card">
    <div class="image">
      <img src="<?php echo $data[7][5]; ?>">
    </div>
    <div class="content">
      <div class="header"><?php echo $data[7][0]; ?></div>
      <div class="meta">
        <a><?php echo $data[7][2]; ?></a>
      </div>
      <div class="description"><?php echo $data[7][3]; ?> </div>
    </div>
    <div class="extra content">
      <span class="right floated">Born in <?php echo $data[7][1]; ?></span>
    </div>
  </div>
  </div>

 </div> 
</div>


</body>
</html>