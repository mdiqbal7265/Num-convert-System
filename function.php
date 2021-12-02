<?php

    /** Decimal to Binary */
    function decimeltobinary($num)
    {
        return base_convert($num, 10, 2);
    }
    /** Decimal to Octal */
    function decimaltooctal($num)
    {
        return base_convert($num, 10, 8);
    }

    /** Decimal to Hexadecimal */
    function decimaltohexa($num)
    {
        return base_convert($num, 10, 16);
    }

    /** Binary to Decimal */
    function binarytodecimal($num)
    {
        return base_convert($num, 2, 10);
    }

    /** Binary to Octal */
    function binarytooctal($num)
    {
        return base_convert($num, 2, 8);
    }

    /** Binary to Hexadecimal */
    function binarytohexa($num)
    {
        return base_convert($num, 2, 16);
    }

    /** Octal to Decimal */
    function octaltodecimal($num)
    {
        return base_convert($num, 8, 10);
    }

    /** Octal to Binary */
    function octaltobinary($num)
    {
        return base_convert($num, 8, 2);
    }

    /** Octal to Hexadecimal */
    function octaltohexa($num)
    {
        return base_convert($num, 8, 16);
    }

    /** Hexadecimal to Decimal */
    function hexatodecimal($num)
    {
        return base_convert($num, 16, 10);
    }

    /** Hexadecimal to Binary */
    function hexatobinary($num)
    {
        return base_convert($num, 16, 2);
    }

    /** Hexadecimal to Octal */
    function hexatooctal($num)
    {
        return base_convert($num, 16, 8);
    }

?>