<!DOCTYPE html>
<html>
<head>
    <title>Sort Data</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'lab10';
        $a=[];

        //DB connection
        $conn = mysqli_connect($hostname,$username,$password,$dbname);
        if($conn->connect_error){
            die("Connection Failed: ". $conn->connect_error);
        }
        echo "Connection Successful!!";


        //QUERY STUDENT TABLE
        $sql = "SELECT * FROM STUDENT";
        $result = $conn->query($sql);

        //PRINT TABLE
        echo "<br>";
        echo "<center>BEFORE SORTING</center>";
        echo "<table border='2'>";
        echo "<tr>";
        echo "<th>USN</th> <th>NAME</th> <th>ADDRESS</th>";
        echo "</tr>";

        if($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                echo "<tr>";
                echo "<td>" . $row['usn'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "</tr>";

                array_push($a,$row['usn']);
            }
        }else{
            echo "Table is empty";
        }
        echo "</table>";

        //SORT THE INFORMATION
        $n=count($a);
        $b=$a;

        for($i=0; $i<$n-1; $i++ ){
            $pos = $i;
            for( $j=$i+1; $j<$n; $j++){
                if($a[$pos]>$a[$j]){
                    $temp = $a[$pos];
                    $a[$pos]= $a[$j];
                    $a[$j] = $temp;
                }
            }
        }

        //$c = name, $d = address
        $c=[];
        $d=[];
        $result = $conn -> query($sql);

        if($result -> num_rows>0){
            while($row = $result -> fetch_assoc()){
                for($i=0; $i<$n; $i++){
                    if($row['usn']==$a[$i]){
                        $c[$i] =$row['name'];
                        $d[$i] = $row['address'];
                    }
                }
            }
        }

        //PRINT SORTED INFORMATION
        echo "<br>";
        echo "<center>AFTER SORTING</center>";
        echo "<table border='2'> ";
        echo "<tr>";
        echo "<th>USN</th> <th>NAME</th> <th>ADDRESS</th>";
        echo "</tr>";

        for($i=0; $i<$n; $i++){
            echo "<tr>";
            echo "<td>" . $a[$i] . "</td>";
            echo "<td>" . $c[$i] . "</td>";
            echo "<td>" . $d[$i] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        $conn->close();
        
    ?>
    
</body>
</html>