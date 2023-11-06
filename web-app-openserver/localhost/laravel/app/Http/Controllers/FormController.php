<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function form()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z]+$/|min:1|max:50',
            'lastname' => 'required|regex:/^[a-zA-Z]+$/|min:1|max:50',
            'age' => 'required|integer|min:18|max:200',
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('/form')->with('message', 'Data incorrect!');
        }
    
        $data = [
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'age' => $request->input('age'),
            'email' => $request->input('email'),
        ];

        $filename = 'data_' . uniqid() . '.json';
        Storage::put($filename, json_encode($data));

        return redirect('/form')->with('message', 'Data submitted successfully!');
    }

    public function showData()
    {
        $files = Storage::files('/');
        $data = [];

        foreach ($files as $file) {
            if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
                $data[] = json_decode(Storage::get($file), true);
            }
        }

        return view('data', ['data' => $data]);
    }
}