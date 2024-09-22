<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciseSession02</title>
</head>
<body>
    <head>
        <?php
            session_start();
            echo"Crea un php con un array inicial con 3 valores numéricos. <br>
                 a) Crea un formulario que permita modificar el valor en una posición en concreto. <br>
                 b) Consigue que se mantenga las modificaciones en el array. <br>
                 c) Añade un botón para calcular el valor medio. <br>
                 <br><br>";
        ?>       
    </head>

    <main>
        <h1>Modify array saved in session</h1>
        <form action="ExerciseSession02.php" method="post">

            Position to modify:
            <select name="position" id="position">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>

            <br><br>

            New valor:
            <input type="number" name="newValue" id="newValue"><br><br>
            <button type="submit" name="button" value="modify">Modify</button>
            <button type="submit" name="button" value="average">Average</button>
            <button type="submit" name="button" value="reset">Reset</button>
        </form>

        <section>
            
            <?php
                if (!isset($_SESSION['array'])) {
                    $_SESSION['array'] = [10, 20, 30]; 
                }

                $array = $_SESSION['array'];
                $message = "";

                if (isset($_POST['button'])) {
                    switch ($_POST['button']) {
                        case 'modify':
                            if (isset($_POST['position']) && isset($_POST['newValue'])) {
                                $position = intval($_POST['position']);
                                $newValue = intval($_POST['newValue']);
                                $array[$position] = $newValue;
                                $_SESSION['array'] = $array;
                            }
                            break;

                        case 'average':
                            $average = array_sum($array) / count($array);
                            $message = "Average: " . round($average, 2);
                            break;

                        case 'reset':
                            $array = [10, 20, 30];
                            $_SESSION['array'] = $array;
                            break;
                    }
                }

            ?>

            <P>Current array: <?php echo implode(", ", $array); ?></P>
            <p><?php echo $message; ?></p>
        </section>
    </main>

</body>
</html>


