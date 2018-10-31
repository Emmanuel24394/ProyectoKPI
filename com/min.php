
<?php

require_once"conexion.php";
        $sql = "SELECT * FROM conkpi";
        $result = mysqli_query($conection,$sql);
        while ($registro = mysqli_fetch_array($result)) {
        ?>
        <?php  echo $registro ["min"] ?>,
        <?php
        }

          ?>