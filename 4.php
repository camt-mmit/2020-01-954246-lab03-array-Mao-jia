<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("input socore ('e' for end of data): ");
$ar[0]=0;
  for ($i=0;;$i++){
    fscanf(STDIN,"%s",$a);
    if ($a=="e") {break;}
    else {$ar[]=$a; printf("input socore ('e' for end of data): ");}
    }
    $num=(count($ar)-1);

if ($num>0){
    $total = array_sum($ar);
    $average = $total/$num;
    printf("The score for ");
    printf("%.2f, ",$ar[1]);
    for ($i=2;$i<$num;$i++) {printf ("%.2f, ",$ar[$i]);}
    if ($num>1) printf("and %.2f",$ar[$num]);
    printf(" = %.2f",$average);
    }
    else { printf("No data!!");}


