<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    const ACTIONS = [
        '+', '-', '/', '*'
    ];

    public function calculate($number1, $number2, $action)
    {
        if($number2 == 0 && $action == '/') {
            return 'Error. Division by zero';
        }
        // calculate data
        switch ($action) {
            case '+':
                $result = $number1 + $number2;
                break;
            case '-':
                $result = $number1 - $number2;
                break;
            case '/':
                $result = $number1 / $number2;
                break;
            case '*':
                $result = $number1 * $number2;
                break;
            default:
                $result = 'NaN';
                break;
        }

        return $result;
    }
}
