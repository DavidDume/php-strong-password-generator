

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

    $length = $_GET['length'];

    function createPassword($length) {
        if($length <= 0) {
            return '';
        }
        $data ='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz!?@#[]';
        return substr(str_shuffle($data), 0, $length);
    }

?>
    <form method="GET" action="index.php">
        <label for="parola">Inserisci lunghezza password</label>
        <input type="number" name="length">
        
        <button type="submit">Crea</button>
        
    </form>
    <?php echo createPassword($length); ?>
</body>
</html>