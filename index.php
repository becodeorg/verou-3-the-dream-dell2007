<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

/* var_dump($_GET); get allows to share the link with the data not good for personal information*/
/* var_dump($_POST); post just */
/*Short version <?= ?>*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Currency Calculator</h1>

    <form action="" method="post">
        <select name="currencyOne">
            <option value="euro" id="currencyOne">Euro</option>
            <option value="dollar" id="currencyOne">Dollar</option>
            <option value="aus" id="currencyOne">AUD</option>
        </select>
        <select name="currencyTwo">
            <option value="euro" id="currencyOne">Euro</option>
            <option value="dollar" id="currencyTwo">Dollar</option>
            <option value="aus" id="currencyTwo">AUD</option>
        </select> <br>
        <label for="destination">Amount</label>
        <input type="number" name="amount" id="amount">
        <input type="submit" name="submit">
    </form>

    <?php

    //!empty === isset + not null

    if (isset($_POST['submit'])) {
        $currencyOne = $_POST['currencyOne'];
        $currencyTwo = $_POST['currencyTwo'];
        $amount = $_POST['amount'];

        if (!empty($amount)) {
            echo "";
        }

        if (
            $currencyOne == 'euro' && $currencyTwo == 'euro' ||
            $currencyOne == 'dollar' && $currencyTwo == 'dollar' ||
            $currencyOne == 'aus' && $currencyTwo == 'aus'
        ) {
            echo $_POST['amount'] * 1;
        }

        if ($currencyOne == 'euro' && $currencyTwo == 'dollar') {
            echo $_POST['amount'] * 1.14;
        }

        if ($currencyOne == 'euro' && $currencyTwo == 'aus') {
            echo $_POST['amount'] * 1.59;
        }

        if ($currencyOne == 'dollar' && $currencyTwo == 'euro') {
            echo $_POST['amount'] * 0.88;
        }

        if ($currencyOne == 'dollar' && $currencyTwo == 'aus') {
            echo $_POST['amount'] * 1.39;
        }

        if ($currencyOne == 'aus' && $currencyTwo == 'euro') {
            echo $_POST['amount'] * 0.63;
        }

        if ($currencyOne == 'aus' && $currencyTwo == 'dollar') {
            echo $_POST['amount'] * 0.72;
        }
    }

    ?>

</body>

</html>