<?php 
$title = 'Главная';
$maintitle = 'Course PHP Practice';
if($url == '/help/'){
  $title = 'Дополнительные материалы';
}
?>

<?php if (preg_match('/^\/codewars/i', $url)) : ?>
<?php $maintitle = 'Code Wars';?>
<?php endif;?>

<?php if ($url == '/codewars/1/'){
  $title = '07.12.2022';
} elseif ($url == '/codewars/2/') {
  $title = '2';
} elseif ($url == '/codewars/3/') {
  $title = '3';
} elseif ($url == '/codewars/4/') {
  $title = '4';
} elseif ($url == '/codewars/5/') {
  $title = '5';
}?>