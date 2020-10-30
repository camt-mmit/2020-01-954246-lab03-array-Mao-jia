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
    fscanf(STDIN,"%f",$ar[$i]);
}
$total = array_sum($ar);
 $num = count($ar);
$average = $total/$num;


printf("The score for ");
// To remove the extra , try the following code and apply them to assignment 4 - 5
//for ($i=1;$i<$size;$i++) {printf ("%.2f, ",$ar[$i]);}
for ($i=1;$i<$size;$i++) {printf ("%.2f%s",$ar[$i], ($i < $size - 1)? ", " : "");}
printf(" and %.2f",$ar[$size]);
printf(" = %.2f",$average);}


else { printf("No data!!");}