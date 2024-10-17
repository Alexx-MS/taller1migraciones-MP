<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;




class QuadraticController extends Controller
{
    public function showForm()
    {
        return view('quadratic.form');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'a' => 'required|numeric',
            'b' => 'required|numeric',
            'c' => 'required|numeric',
        ]);

        $a = $validated['a'];
        $b = $validated['b'];
        $c = $validated['c'];

        $discriminant = $b**2 - 4 * $a * $c;

        if ($discriminant < 0) {
            $result = 'No hay soluciones reales.';
        } elseif ($discriminant == 0) {
            $x = -$b / (2 * $a);
            $result = "La solución es x = $x.";
        } else {
            $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
            $result = "Las soluciones son x1 = $x1 y x2 = $x2.";
        }

        return view('quadratic.result', compact('result'));
    }
}
