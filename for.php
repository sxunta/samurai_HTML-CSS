<?php
for ($i = 1; $i < 31; $i++) {
    if($i % 15 == 0) {
 print("fizzbuzz"."\n");
}elseif($i % 5 == 0) {
 print("buzz"."\n");   
}elseif($i % 3 == 0) {
 print("fizz"."\n");    
}else{
    print($i."\n");
}
    
}
?>