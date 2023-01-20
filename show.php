<?php
$n=date("N"); 
$name=$_POST["name"];
$old=$_POST["old"];
$sex=$_POST["Sex"];
$S=$_POST["S"];

if($old <= "15"&& $sex =="ชาย"){
    $n=("ดช.");
}elseif($old >"15"&& $sex =="ชาย"){
    $n=("นาย.");
}elseif($old <="15"&& $sex =="หญิง"){
    $n=("ดญ.");
}elseif($old >"15"&& $sex =="หญิง" && $S == "แต่งงานแล้ว"){
    $n=("นาง.");
}elseif($old >"15"&& $sex =="หญิง"){
    $n=("นางสาว.");
}
echo"ชื่อ:$n$name สถานะ:$S อายุ:$old " ;    
?>
