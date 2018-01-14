<?php
    echo "<h2>For Loop:</h2>";
    /*
     * general form for(init; condition; increment){ looping statement}
     */
     for($i=0; $i<10; $i++){
         echo ($i+1).' ';
     }

     echo "<h2>While Loop:</h2>";
     /*
      * general form while(condition){ looping statement}
      */
     $donwloading = true;
     $a = 0;
     while ($donwloading) {
         echo ++$a . ' ';
         if($a == 10){
             $donwloading = false;
         }
     }

     echo "<h2>Do .. While Loop:</h2>";
     /*
      * general form do{ looping statement} while(condition);
      */
     $a = 0;
     do {
          echo ++$a . ' ';
     } While($a<10);

     echo "<h2>foreach Loop:</h2>";
     /*
      * general form foreach{ $array as $item} { }
      */
    $names = array('Rahim', 'Karim', 'rana');
    foreach ($students as $name) {
        echo $name.' ';
    }
?>
