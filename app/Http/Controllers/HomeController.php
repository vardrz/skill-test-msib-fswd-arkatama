<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', []);
    }

    public function store(Request $req)
    {
        $index_array_usia = 100;
        $name = '';
        $age = '';
        $city = '';

        $input = str_replace(['tahun', 'thn', 'th'], [''], strtolower($req->input));
        $input = explode(' ', $input);

        foreach ($input as $i => $val) {
            if (is_numeric($val)) {
                $age = $age . $val . ' ';
                $index_array_usia = $i;
            } else {
                if ($i > $index_array_usia) {
                    $city = $city . $val . ' ';
                } else {
                    $name = $name . $val . ' ';
                }
            }
        }

        $data = [
            'name' => strtoupper($name),
            'age' => $age,
            'city' => strtoupper($city),
        ];

        Data::insert($data);
        return redirect()->back()->with('success', 'Input Pengguna berhasil ditambahkan.<br>Name: ' . $data['name'] . '<br>Age:' . $data['age'] . '<br>City:' . $data['city']);
    }
}
