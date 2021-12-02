<?php

    session_start();
    include_once "function.php";

    $action = $_POST['action'] ?? '';
    $num = $_POST['number'] ?? 0;

    if("1" == $action)
    {
        $result = decimeltobinary($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'decimal';
        $_SESSION['c_num_f'] = 'binary';
        header("Location: index.php");
    }elseif("2" == $action)
    {
        $result = decimaltooctal($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'decimal';
        $_SESSION['c_num_f'] = 'octal';
        header("Location: index.php");
    }elseif("3" == $action)
    {
        $result = decimaltohexa($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'decimal';
        $_SESSION['c_num_f'] = 'hexadecimal';
        header("Location: index.php");
    }
    elseif("4" == $action)
    {
        $result = binarytodecimal($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'binary';
        $_SESSION['c_num_f'] = 'decimal';
        header("Location: index.php");
    }elseif("5" == $action)
    {
        $result = binarytooctal($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'binary';
        $_SESSION['c_num_f'] = 'octal';
        header("Location: index.php");
    }
    elseif("6" == $action)
    {
        $result = binarytohexa($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'binary';
        $_SESSION['c_num_f'] = 'hexadecimal';
        header("Location: index.php");
    }elseif("7" == $action)
    {
        $result = octaltodecimal($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'octal';
        $_SESSION['c_num_f'] = 'decimal';
        header("Location: index.php");
    }elseif("8" == $action)
    {
        $result = octaltobinary($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'octal';
        $_SESSION['c_num_f'] = 'binary';
        header("Location: index.php");
    }elseif("9" == $action)
    {
        $result = octaltohexa($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'octal';
        $_SESSION['c_num_f'] = 'hexadecimal';
        header("Location: index.php");
    }elseif("10" == $action)
    {
        $result = hexatodecimal($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'hexadecimal';
        $_SESSION['c_num_f'] = 'decimal';
        header("Location: index.php");
    }elseif("11" == $action)
    {
        $result = hexatobinary($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'hexadecimal';
        $_SESSION['c_num_f'] = 'binary';
        header("Location: index.php");
    }elseif("12" == $action)
    {
        $result = hexatooctal($num);
        $_SESSION['num'] = $num;
        $_SESSION['c_number'] = $result;
        $_SESSION['num_f'] = 'hexadecimal';
        $_SESSION['c_num_f'] = 'octal';
        header("Location: index.php");
    }


?>