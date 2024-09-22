<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
        <?php
            session_start();
            echo"Crea un formulario que permita gestionar la cantidad de refresco o leche que hay en un 
            supermercado. <br>
            a) Se debe mantener el nombre del trabajador que está utilizando la aplicación. <br>
            b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista <br>
            c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese 
            caso mostrar error.<br><br>";
        ?>       
    </head>

    <main>
        <h1>Supermarket management</h1>
        <form action="ExerciseSession01.php" method="post">

            Worker name:
            <input type="text" name="worker" id="worker" required>

            <h2>Choose product:</h2>

            <select name="product" id="product">
                <option value="milk">milk</opti>
                <option value="softDrink">soft drink</opti>
            </select>

            <h2>Product quantity:</h2>
            <input type="number" name="quantity" id="quantity"><br><br>
            <button type="submit" name="button" value="add" >add</button>
            <button type="submit" name="button" value="remove" >remove</button>
            <button type="submit" name="button" value="reset" >reset</button>
        </form>

        <section>
            
            <?php
                if (!isset($_SESSION["inventory"])) {
                    $_SESSION["inventory"] = ["milk" => 0, "softDrink" => 0];
                }

                if(isset($_POST["worker"])){
                    $_SESSION["worker"] = $_POST["worker"];
                    $worker = $_SESSION["worker"];
                }else{
                    $worker = "No se ha introducido trabajador todavía.";
                }

                $message = "";
                $inventory = $_SESSION["inventory"];

                if(isset($_POST["button"])){
                    $product = $_POST["product"];
                    $quantity = intval($_POST["quantity"]);
                    switch($_POST["button"]){
                        case "add":
                            // Añadir al inventario
                            $inventory[$product] += $quantity;
                            $message = "$quantity units of $product added.";
                            break;
                        
                        case "remove":
                            // Quitar del inventario, solo si hay suficientes unidades
                            if ($inventory[$product] >= $quantity) {
                                $inventory[$product] -= $quantity;
                                $message = "$quantity units of $product removed.";
                            } else {
                                $message = "Error: Not enough units of $product to remove.";
                            }
                            break;
                        
                        case "reset":
                            // Reiniciar inventario
                            $inventory = ["milk" => 0, "softDrink" => 0];
                            $message = "Inventory has been reset.";
                            break;
                    }
                }

                $_SESSION["inventory"] = $inventory;
            ?>

            <h2>Inventory:</h2>
            <p>Worker: <?php echo $worker; ?></p>
            <p>Units of milk: <?php echo $inventory["milk"]; ?></p>
            <p>Units of soft drink: <?php echo $inventory["softDrink"]; ?></p>
            <p><?php echo $message; ?></p>
        </section>
    </main>

</body>
</html>


