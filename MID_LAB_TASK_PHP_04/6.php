<?php

$camera = [ 'Canon','Nikon','Sony','Fuji'
];
for($i=0;$i<=count($camera);$i++)
{
    if( $i%2!=0)
    echo $camera[$i],'<br/>';
}

?>