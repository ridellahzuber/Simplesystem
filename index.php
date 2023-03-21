<?php
$age=17;
$pvc=TRUE;
$ward_no=20;

if ($age>=18 && $pvc==TRUE && $ward_no==20){
    echo"voter eligible to vote";
}
if($age<18){

    echo"Not elligible to vote because of not being upto age";

}
if($pvc==False){
    echo"Not elligible to vote because voter has no pvc";
}
if($ward_no !=20){
    echo"Not elligible to vote because voter has no pvc";
}
?>