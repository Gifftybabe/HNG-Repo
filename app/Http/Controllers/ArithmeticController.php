<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithmeticController extends Controller
{
   public function calculate(Request $request)
    {
        $operation_type = $request->operation_type;
        $x = $request->x;
        $y = $request->y;

        switch($operation_type) {
            case 'addition':
                $result = $x + $y;
            break;
            case 'subtraction':
                $result = $x - $y;
            break;
             case 'multiplication':
                $result = $x * $y;
            break;
        }

        return response()->json([
            'slackUsername' => 'Gifftybabe',
            'operation_type' => $operation_type,
            'result' => $result
        ]);

    }
}
