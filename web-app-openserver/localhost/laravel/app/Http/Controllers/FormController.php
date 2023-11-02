<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'data' => 'required|string|max:255',
        ]);

        $data = $request->input('data');
        $filename = 'data_' . uniqid() . '.json';
        Storage::put($filename, json_encode($data));

        return redirect('/')->with('success', 'Data submitted successfully!');
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