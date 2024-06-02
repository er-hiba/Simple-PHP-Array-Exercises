<html>

<head>
    <style>
        div{
            margin-top: 30px;
            margin-left: 30px;
        }

        button {
            margin: 10px 0 0 30px;
            width: 120px;
            height: 30px;
        }

        input {
            width: 80px;
            height: 25px;
            margin-right: 15px;
            margin-bottom: 5px;
        }
    </style>


</head>

<body>
    <div>
        <form action="" method="GET">
            <h2>Enter 10 numbers: </h2>
                <input type="number" step= 0.1 name="n0">
                <input type="number" step= 0.1 name="n1"> <br>
                <input type="number" step= 0.1 name="n2">
                <input type="number" step= 0.1 name="n3"> <br>
                <input type="number" step= 0.1 name="n4">
                <input type="number" step= 0.1 name="n5"> <br>
                <input type="number" step= 0.1 name="n6">
                <input type="number" step= 0.1 name="n7"> <br>
                <input type="number" step= 0.1 name="n8">
                <input type="number" step= 0.1 name="n9"> <br>
            <button type="submit">Sumbit</button>
        </form>
    </div>

</body>

</html>



<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['n0'])) {

    $tab = []; 

    for ($i = 0; $i < 10; $i++){
        $x = $_GET["n".$i];
        $tab[$i] = $x;
    }
    
    echo"<br>";

    print_r($tab);
    
    $sum = 0;
    $average = 0;
    $product = 1;
    
    for ($i = 0; $i < 10; $i++){
        $sum += $tab[$i];
        $product *= $tab[$i];
    }
    
    $average = $sum / 10 ;
    
    echo "<br><br>The sum is " . $sum . " <br><br> The average is " . $average . " <br><br> The product is " . $product ;
}
?>
