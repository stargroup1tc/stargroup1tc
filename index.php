<form action="" method= "get">
    Enter any Number:
    <input type="number" name="num" />
    <input type="submit" name="submit" value="send">
</form>

<?php
function generate($n){
    $i = 1;
    while($i <= 10){
        echo($i . " x $n = " . $i*$n . "<br>");
        $i++;
    }
}

if(isset($_GET['submit'])){
    generate($_GET['num']);
}

?>