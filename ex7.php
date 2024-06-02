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
                <input type="number" step= 0.01 name="n0">
                <input type="number" step= 0.01 name="n1"> <br>
                <input type="number" step= 0.01 name="n2">
                <input type="number" step= 0.01 name="n3"> <br>
                <input type="number" step= 0.01 name="n4">
                <input type="number" step= 0.01 name="n5"> <br>
                <input type="number" step= 0.01 name="n6">
                <input type="number" step= 0.01 name="n7"> <br>
                <input type="number" step= 0.01 name="n8">
                <input type="number" step= 0.01 name="n9"> <br>
            <button type="submit">Sumbit</button>
        </form>
    </div>

<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['n0'])) {
    $tab = [];

    for ($i = 0; $i < 10; $i++) {
        $x = $_GET["n" . $i];
        $tab[$i] = $x;
    }

    $_SESSION['tab'] = $tab;

    echo '<div style="margin-left:15px">
            <form action="" method="GET">
                <h2>Enter a number to check:</h2>
                <input type="number" step="0.01" name="n">
                <button type="submit">Check Number</button>
            </form>
        </div>';
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['n'])) {
    $tab = $_SESSION['tab'];
    
    echo("<br><br>");

    print_r($tab);
    
    echo("<br><br>") ;
    
    $occurrences = 0;
    
    foreach ($tab as $num) {
        if ($num == $_GET["n"]) {
            $occurrences++;
        }
    }

    if ($occurrences != 0){
        echo "The number of occurrences of &nbsp; " . $_GET["n"] . "&nbsp; in the array is:&nbsp; $occurrences";
    } else {
        echo "The number &nbsp; " . $_GET["n"] . " &nbsp; is not in the array.";
    }
    
}
?>

</body>
</html>
