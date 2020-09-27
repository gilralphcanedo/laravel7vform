<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class FormController extends Controller
{
    public function index() {
        return view('form');
    }

    public function submit(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        if($validator->fails()) {
            return response(['errors' => $validator->errors(), 'message' => 'The given data was invalid.'], 422);
        }

        return response()->json(['success' => true, 'message' => 'Success!']);
    }
}
