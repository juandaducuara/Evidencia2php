<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Inicio de sesión</h2>
    <form action="" method="get">
        <div class="input">
            <input type="text" name="Usuario" pattern="[A-Za-z0-9]{4,10}" title="No debe utlizar caracteres especiales" required placeholder="Ingrese usuario" oninput="this.value = this.value.replace(/[^A-Za-z0-9]/g, '').replace(/(\..*)\./g, '$1');">
        </div>
        <div class="input">
            <input type="password" name="Clave" pattern="^[A-Za-z0-9]{3,18}" required placeholder="Ingrese la contraseña" oninput="this.value = this.value.replace(/[^A-Za-z0-9*-_?$.,]/g, '').replace(/(\..*)\./g, '$1');">
        </div>
        <div class="input">
            <input type="submit" value="Ingresar">
        </div>
    </form>
    <?php
                $usuario = 'JuanDa13';
                $clave = '123abc';

                $usu=$_POST['usuario'];
                $clave=$_POST['clave'];

                if ($usu == $usuarios && $pass == $password){
                    echo "<h2>Ingreso exitoso</h2>";
                }else{
                    echo "<h2>Usuario o contraseña incorrectos</h2>";
                }
            ?>
</body>

</html>
