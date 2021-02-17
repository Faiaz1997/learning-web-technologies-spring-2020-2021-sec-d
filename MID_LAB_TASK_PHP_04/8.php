<?php

$array = [ 
    [1, 2, 3, 'A'], 
    [1, 2,'B', 'C'], 
    [1, 'A', 'B', 'C'] 
];
for ($i=0; $i<=count($array); $i++)	
{	 
for(($j=count($array)-1);$j>=$i;$j--)	  
{	  	
echo $array[$i][$j];;	 
}	  	
echo "<br/>";   	
} 
echo "<br/>";  


?>