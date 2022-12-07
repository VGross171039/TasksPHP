<?php error_reporting(-1); ?>
<?php require_once $root . '/template/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $maintitle;?> | <?php echo $title;?></title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/grid.css">
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="page-wrap">
    <header class="header">
      <div class="container">
        <div class="col-50">
          <?php if($url != '/'):?>
          <a href="/">
            <h1>Course PHP Practice</h1>
          </a>
          <p><?php echo $maintitle;?><span>|</span>
            <?php echo $title;?>
          </p>
          <?php else:?>
          <h1>Course PHP Practice</h1>
          <p>Главная</p>
          <?php endif;?>
        </div>
        <div class="col-50"></div>
      </div>
    </header>
    <div class="content-wrap">
      <div class="container">
        <?php if($url != '/'):?>
        <div class="col-100">
          <?php if($url != '/help/'):?>
          <div class="task-wrap">
            <?php require_once 'tasks/index.php';?>
          </div>
          <?php endif;?>
          <?php endif;?>