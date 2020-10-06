<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculator;

class CalculatorController extends Controller
{

    public function index()
    {
        $actions = Calculator::ACTIONS;

        return view('calculator.index', compact('actions'));
    }

    public function calculate(Request $request)
    {
        // get data
        $number1 = $request->get('number_1');
        $number2 = $request->get('number_2');
        $action = $request->get('action');

        $calculator = new Calculator();
        $result = $calculator->calculate($number1, $number2, $action);

        $actionString = $number1 . $action . $number2;

        return redirect()->route('index')->with(compact(
            'result',
            'actionString'
        ));
    }
}
