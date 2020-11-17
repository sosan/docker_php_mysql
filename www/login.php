<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <header>
        <h2>LOGIN</h2>
    </header>

    <main>
        <form method="post" action="login.php">

            <?php include('error.php'); ?>
            
            <label>Usuario</label>
            <input type="text" name="usuario" placeholder="Usuario" required="required">
            
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required="required">
            
            <button type="submit" name="usuariologin">Login</button>

        </form>
    </main>
</body>
</html>