<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    /**
     *
     *
     * @return     <type>  ( description_of_the_return_value )
     */
    public function index()
    {
        return view('index');
    }

    public function input(Request $request)
    {
        $request->validate([
            'exampleInputText' => 'required|max:10',
        ]);

            $exampleInputText = $request->exampleInputText;
            $exampleTextarea = $request->exampleTextarea;
            $exampleSelect = $request->exampleSelect;
            $exampleCheckbox1 = $request->exampleCheckbox1;
            $exampleCheckbox2 = $request->exampleCheckbox2;
            $exampleRadio = $request->exampleRadio;
            $exampleRange = $request->exampleRange;

        return view('index', [
            'exampleInputText' => $exampleInputText,
            'exampleTextarea' => $exampleTextarea,
            'exampleSelect' => $exampleSelect,
            'exampleCheckbox1' => $exampleCheckbox1,
            'exampleCheckbox2' => $exampleCheckbox2,
            'exampleRadio' => $exampleRadio,
            'exampleRange' => $exampleRange,
        ]);
    }
}
