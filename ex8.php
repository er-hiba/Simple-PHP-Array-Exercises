<html>
    <head>
        <style>
            div{
                margin: 30px 0 0 15px;
            }
            button{
                padding: 7px;
                width: 80px;
                margin-left: 70px;
           }
        </style>
    </head>
<body>
    <div>
        <h2>Enter the grades of the 10 students:</h2>
        <form action="" method="POST">
            <?php for ($i = 0; $i < 10; $i++) : ?>
                Grade of student n° <?php echo $i + 1; ?>:
                &nbsp; 
                <input type="number" name="grades[]" min="0" max="20" step="0.01" required><br><br>
            <?php endfor; ?>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['grades'])) {
        $grades = $_POST['grades'];

        echo"<br>";
        
        print_r($grades);

        $sum = 0;
        foreach ($grades as $grade) {
            $sum += floatval($grade);
        }

        //$average = $sum / count($grades);
        $average = $sum / 10;

        $grades_above_average = 0;
        foreach ($grades as $grade) {
            if (floatval($grade) > $average) {
                $grades_above_average++;
            }
        }

        echo "<br><br>The class average is: $average <br>";
        echo "<br>The number of grades above the average is: $grades_above_average";
    }
    
?>
