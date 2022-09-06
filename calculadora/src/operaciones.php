<?php
function showOperaciones($num1, $num2, $res)
{
    if (isset($num1) && isset($num2) && isset($res)) {
        switch ($res) {
            case 'sumar':
                $res = $num1 + $num2;
                $simbolo = '+';

                break;
            case 'restar':
                $res = $num1 - $num2;
                $simbolo = '-';
                break;
            case 'multiplicar':
                $res= $num1 * $num2;
                $simbolo = '*';
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $res = $num1 / $num2;
                    $simbolo = '/';
                } else {
                    echo "No se puede dividir por 0";
                }
                break;

            default:
                echo " 404 page not FOUND";
                break;
        }
            echo '<span>' . $res . '</span>';
    }
}
