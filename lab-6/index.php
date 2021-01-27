<?php
    echo "<h1>REFRESH PAGE</h1>";
    $file = fopen('counter.txt',"r");
    $hits = fscanf($file,"%d");
    fclose($file);
    $hits[0]++;

    $file = fopen('counter.txt',"w");
    fprintf($file,"%d",$hits[0]);
    fclose($file);

    echo "Total number of views: " . $hits[0];

?>