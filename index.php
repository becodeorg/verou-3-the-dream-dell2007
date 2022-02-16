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
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);

    /* var_dump($_GET);*/
    /* var_dump($_POST);*/
    ?>

    <h1>Currency Calculator</h1>

    <form action="" method="post">
        <select name="currencyOne">
            <option value="1" id="euro">Euro</option>
            <!-- <option value="1" id="dollar">Dollar</option> -->
        </select>
        <select name="currencyTwo" id="currency">
            <option value="1.14" name="dollar" id="currency">Dollar</option>
            <option value="1.58" name="australia" id="currency">AUD</option>
        </select> <br>
        <label for="destination">Amount</label>
        <input type="text" name="destination" id="destination">
        <input type="submit">
    </form>

    <?php

    $amount = $_POST;
    if (empty($amount)) {
        echo "";
    } else {
        echo $_POST['destination'] * $_POST['currencyTwo'];
    }

    ?>

</body>

</html>