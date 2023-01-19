<?php 
# MAAKT DE VARIABLEN AAN#
$min = 1;
$max = 9;
$n = 10;

# LAAT 4 WILLEKEURIGE CIJFERS ZIEN #
echo (rand(1,9)),(rand(1,9)),(rand(1,9)),(rand(1,9));

# DEZE FUNCTIE KIEST TWEE WILLEKEURIGE LETTERS #
function getRandomString($n)
{
  $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';
 
  for ($i = 0; $i < 2; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
  }
 
  return $randomString;
}

# ZORGT VOOR EEN SPATIE TUSSEN DE LETTERS EN CIJFERS #
echo " ";

# LAAT 2 WILLEKEURIGE LETTERS ZIEN #
echo getRandomString( $n);
 
?>

<?php
function calculateAreaOfCircle($number = 1, $type = 'radius') {
  if(!is_numeric($number) || $number <= 0)
    return -1;

  // what type of number is it?
  switch($type) {
    case 'radius':
    default:
      $radius = $number;

      break;

    case 'diameter':
      $radius = $number / 2;

      break;
  }

  return pow($radius, 2) * M_PI;
}

// what is the area for the radius of 25?
echo(calculateAreaOfCircle(25));

// what is the area for the diameter of 30?
echo(calculateAreaOfCircle(30, 'diameter'));
?>