<?php include "min.php" ?>
<?php

require_once"conexion.php";
        $sql = "SELECT * FROM datos";
        $result = mysqli_query($conection,$sql);
        while ($registro = mysqli_fetch_array($result)) {
        ?>
        
        <?php  echo $registro ["datos"] ?>,
        
        <?php
        }

          ?>
        <?php include "max.php" ?>