<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$winningStatus = false;
$roundPlayed = 0;

$COST_OF_ONE_ROUND = 0.5;
$RANDOMIZE_RANGE = 2;

while ($winningStatus===false):
  $roundPlayed++;

  // game logic goes here
  // 1. Create an **array of 5 elements**, each element is a random number of either 1 or 0
  // Math.floor(Math.random() * 2) -> produce a random number of either 1 or 0
  $chosenNumbers = [];

  $counter = 0;
  while($counter < 5) :
    $chosenNumbers[$counter] = floor(rand(0,1));
    $counter++;
  endwhile;

  echo $chosenNumbers[0] . $chosenNumbers[1] . $chosenNumbers[2] . $chosenNumbers[3] . $chosenNumbers[4];
  // 2. Create a while loop, that goes through each element in the array, check if they are 1 or 0
  // 3. Also create a counter variable to keep track of the number of 1 and 0 values in the array

  $oneCounter = 0;
  $zeroCounter = 0;

  $counter = 0;
  while ($counter < 5) :
    // console.log(`Checking if element at index ${counter} is 1 or 0`)
    if ($chosenNumbers[$counter] === 1) :
      // console.log('it is 1')
      $oneCounter++;
     elseif ($chosenNumbers[$counter] === 0) :
      // console.log('it is 0')
      $zeroCounter++;
    endif;
    $counter++;
endwhile;

  echo "Found" . $oneCounter . "ones and" . $zeroCounter . "zeroes";
   if ($oneCounter === 5) :
    $winningStatus == true;
    echo "Jackpot";
   
   elseif ($zeroCounter === 5) :
    echo "No win but very lucky";
   
   elseif ($oneCounter > 3 && $oneCounter < 5) :
    echo "Smaller prize";
   else :
    echo "Not lucky, no win either";
   endif;

  if ($winningStatus===true) :
    break;
  
endif;
endwhile;

echo $roundPlayed . "rounds have been played until a jackpot is won";
echo bcmul($roundPlayed, $COST_OF_ONE_ROUND) . "EUR was spent to win that jackpot";

?>
<h1>Thank you</h1>


    
</body>
</html>