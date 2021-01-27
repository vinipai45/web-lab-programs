<html>
<head>
    <meta http-equiv="refresh" content="1" />
    <title>SERVER TIME</title>
    <style>
        body{
            background-color:black;
        }
        p{
            color:white;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            font-size:40px
        }
    
    </style>
</head>
<body>
    <p>
        <?php
            date_default_timezone_set('Asia/Kolkata'); 
            echo date(" h:i:s A ") ;  
        ?>  
    </p>
</body>
</html>