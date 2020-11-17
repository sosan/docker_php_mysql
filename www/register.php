<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>REGISTRO</title>
</head>
<body>
    <header>
        <h2>REGISTRO</h2>
    </header>

    <main>
        <form method="post" action="register.php">

            <?php include('error.php'); ?>
            
            <label>Usuario</label>
            <input type="text" name="usuario" placeholder="Usuario" required="required">
            
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required="required">
            
            <button type="submit" name="usuarioregistro">Registro</button>

        </form>
    </main>
</body>
</html>