<?php
/**
     * ID:602110189
     * Name: Mao Jia
     * WeChat: Ga
     */
printf("Input the number of grades:");
fscanf(STDIN,"%d",$size);
printf("Input grade data from max score to min score\n");
for ($i=1;$i<=$size;$i++){
    printf("$i: Input grade data (grade min_score): ");
    fscanf(STDIN,"%s %f",$grade,$min);
    $gra[$i]=$grade; $mi[$i]=$min;
}


$ar[0]=0;
  Printf("Input score 1 ('e' for end of data):");
  for ($i=0;;$i++){
    fscanf(STDIN,"%s",$a);
    for ($x=1;$x<=$size;$x++){ if ($a>=$mi[1]) $b=$gra[1];
    else if ($a<$mi[$x] && $a>=$mi[($x+1)]) $b=$gra[($x+1)];}

    if ($a=="e") {break;}
    else {$ar[]=$a; 
        printf("grade is $b \n");
        printf("input socore ('e' for end of data): ");}
    }
    $num=(count($ar)-1);
    var_dump($ar);

if ($num>0){
        $total = array_sum($ar);
        $average = $total/$num;
        for($i=1;$i<=$num;$i++) {$c=(($ar[$i]-$average)*($ar[$i]-$average)+$c);printf("%.2f\n",$c);}
        $variance=$c/$num;
        printf("The summary for ");
        printf("%.2f, ",$ar[1]);
        for ($i=2;$i<$num;$i++) {printf ("%.2f, ",$ar[$i]);}
        if ($num>1) printf("and %.2f",$ar[$num]);
        printf("\naverage = %.2f",$average);
        printf("\nvariance = %.2f",$variance);}
else { printf("No data!!");}