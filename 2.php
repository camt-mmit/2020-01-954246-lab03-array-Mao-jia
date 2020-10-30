<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("input number of data:");
fscanf(STDIN,"%d",$size);

if($size>0){
 for ($i=1;$i<=$size;$i++){
    printf ("input socore $i:");
    fscanf(STDIN,"%f",$ar[$i]);}
$total = array_sum($ar);
 $num = count($ar);
$average = $total/$num;

$str = implode(", ", $ar);
printf("The score for $str is %.2f",$average);}
else { printf("No data!!");}

