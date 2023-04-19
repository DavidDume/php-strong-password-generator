

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    require __DIR__ . '/functions.php';

    session_start();

    $_SESSION['page'] = createPassword($length);

    if(createPassword($length)) {
        header('Location: password.php');
    }
    
?>
    <form method="GET" action="index.php">
        <label for="parola">Inserisci lunghezza password</label>
        <input type="number" name="length">
        
        <button type="submit">Crea</button>
        
    </form>
</body>
</html>