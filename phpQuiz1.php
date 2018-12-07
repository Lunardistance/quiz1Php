
<?php


function beer(&$bottles){
    
    $bottles = 99;
  while ($bottles > 0) {
    echo "$bottles bottles of beer on the wall, $bottles bottles of beer, take one down and pass it around...<br /><br />";
    $bottles--;
}
if($bottles = 1){
    echo "$bottles bottle of beer on the wall, $bottles bottle of beer, take one down and pass it around...<br /><br />";
    $bottles--;
} 
if($bottles < 1) {
    echo "No more bottles of beer on the wall, no more bottles of beer, go to the store and buy some more, 99 bottles of beer on the wall!";
};
};

beer($bottles);
