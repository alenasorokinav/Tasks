<?php

function number_of_pairs($arr,$n)
{
	$k=0;
	for($i=0;$i<$n-1;$i++)
		if($arr[$i]==$arr[$i+1])
			$k++;
	return $k;
}

$n=100;
echo "Array: ";
for($i=0;$i<$n;$i++)
{
	$arr[$i]=rand(-10,10);
	echo $arr[$i]." ";
}
$k=number_of_pairs($arr,$n);
echo "<br>Answer: ".$k;

?>
