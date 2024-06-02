<html>
<head>
    <style>
        div{
            padding: 10px;
        }
    </style>
</head>
<body>
    <div>
        <h2>Prime Number Check</h2>
        <form method="post" action="">
            <label for="num">Enter a positive integer:</label> &nbsp;
            <input type="number" name="num" id="num" min=0 required> &nbsp;
            <input type="submit" value="Check">
        </form>
    </div>
</body>
</html>

<?php
    function is_prime($number)
    {
        if ($number <= 1) {
            echo "&nbsp; The number &nbsp; $number &nbsp; is not prime.";
            return;
        }

        $divisors = 0;
        for ($i = 1; $i <= $number; $i++) {
            if ($number % $i == 0) {
                $divisors++;
            }
        }

        if ($divisors == 2) {
            echo "&nbsp; The number &nbsp; $number &nbsp; is prime.";
        } else {
            echo "&nbsp; The number &nbsp; $number &nbsp; is not prime.";
        }
    }

    // Method using square root for optimization
    
    /*function is_prime($number)
    {
        if ($number <= 1) {
            echo "&nbsp; The number &nbsp; $number &nbsp; is not prime.";
            return;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                echo "&nbsp; The number &nbsp; $number &nbsp; is not prime.";
                return;
            }
        }
        echo "&nbsp; The number &nbsp; $number &nbsp; is prime.";
    }*/
    

    // Another method
    
    /*function is_prime($number)
    {
        if ($number <= 1) {
            echo "&nbsp; The number &nbsp; $number &nbsp; is not prime.";
            return;
        }

        for ($i = 2; $i <= $number / 2; $i++) {
            if ($number % $i == 0) {
                echo "&nbsp; The number &nbsp; $number  &nbsp;is not prime.";
                return;
            }
        }
        echo "&nbsp; The number &nbsp; $number &nbsp; is prime.";
    }*/
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = (int)$_POST["num"];
        is_prime($number);
    }
?>
