<?php

// if - else - elseif - elseif

$score = 48;

if( (85 <= $score) && ($score <= 100) ){
  // nested if
    if($score > 95){
      echo 'A+';
    } else if((90 <= $score) && ($score < 95)){
      echo "A";
    } else if((85 <= $score) && ($score < 90)){
      echo "A-";
    }
} else if((70 <= $score) && ($score < 85)){
      if((80 <= $score) && ($score < 85)){
      echo 'B+';
    } else if((75 <= $score) && ($score < 80)){
      echo "B";
    } else if((70 <= $score) && ($score < 75)){
      echo "B-";
    }
} else if((50 <= $score) && ($score < 70)){
      if((65 <= $score) && ($score < 70)){
      echo 'D+';
    } else if((60 <= $score) && ($score < 65)){
      echo "D";
    } else if((50 <= $score) && ($score < 60)){
      echo "D-";
    }
} else {
  echo "F"; 
} 
echo "<br />";
//-----------------------------------------------------
?>

<!-- alternative syntax for using with html and css -->
<!-- if you want to use this syntax the elseif must be connected -
here you can't use else if but you can use the connected one for any syntax --> 
<html>
  <head></head>

  <body>
      <?php $score = 95 ?>

      <?php if($score >= 90): ?>
          <strong style="color:darkgreen;">A</strong>
      <?php elseif($score >= 80): ?>
          <strong style="color: green;">B</strong>
      <?php elseif($score >= 70): ?>
          <strong style="color: orange;">C</strong>
      <?php elseif($score >= 60): ?>
          <strong style="color:orangered;">D</strong>
      <?php else : ?>
          <strong style="color: red;">F</strong>
      <?php endif ?>        
  </body>

</html>