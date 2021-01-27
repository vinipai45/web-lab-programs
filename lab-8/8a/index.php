<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        table,tr,td{
            border:1px solid black;
            text-align:center;
        }
        table{
            background-color:darkgrey;
            margin:auto;
        }
        input{
            text-align:right;
        }
    </style>
</head>
<body>
    <form action="index.php" method="POST">
        <table>
            <th colspan="3">SIMPLE CALCULATOR</th>
            <tr>
                <td>First Number : </td>
                <td ><input  type="number" placeholder="0" name="num1" /></td>
                <td rowspan="2">
                    <input type="submit" value="calculate" name="submit" />
                </td>
            </tr>
            <tr>
                <td>Second Number : </td>
                <td><input  type="number" placeholder="0" name="num2" /></td>
            </tr>
        
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if(is_numeric($num1) and is_numeric($num2)){
            echo "<tr><td>Addition:</td><td>". ($num1+$num2) ."</td></tr>";
            echo "<tr><td>Subtraction:</td><td>". ($num1-$num2) ."</td></tr>";
            echo "<tr><td>Multiplication:</td><td>". ($num1*$num2) ."</td></tr>";
            echo "<tr><td>Divide:</td><td>". ($num1/$num2) ."</td></tr>";
            echo "</table>";
        }else{
            echo "alert('Enter valid number)";
        }
    }
?>



</body>
</html>