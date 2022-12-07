<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php require_once $root . '/template/header.php'; ?>

<?php 
function stringNum($num){
  if(is_string($num)){
    return 'Error';
  } else {
    $total = $num * 50 + 6;
  }
  return $total;
}

echo stringNum(23);
?>

<hr>

<?php 
function fuel_price($litres, $price_per_litre) {

  if($litres > 2 && $litres<= 4){
    $discont = 0.05;
  } elseif($litres > 4 && $litres<= 6){
    $discont = 0.10;
  }  elseif($litres > 6 && $litres<= 8){
    $discont = 0.15;
  } elseif($litres > 8 && $litres<= 10){
    $discont = 0.20;
  } else {
    $discont = 0.25;
  }

  if((is_numeric($litres) and ($litres > 0))){
    if((is_numeric($price_per_litre) and ($price_per_litre > 0))){

      return $price_per_litre * $litres - $litres * $discont;
      
    }
  } 
  
}

echo fuel_price(7, 23);



?>

<?php require_once $root . '/template/footer.php'; ?>