<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("input number of data:");
fscanf(STDIN,"%d",$size);

for ($i=1;$i<=$size;$i++){
    printf ("input socore $i:");
    fscanf(STDIN,"%f",$ar[$i]);
}
$total = array_sum($ar);
 $num = count($ar);
$average = $total/$num;
printf("average is $average");
