<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function index()
    {
        echo 'Olá, mundo!';
    }

    public function show($id)
    {
        echo 'tentativa de get com parâmetro';
        echo $id;
    }

    public function store(Request $request)
    {
        // echo 'Houve uma tentativa no POST';
        echo '<pre>';
        var_dump($request->title);
        var_dump($request->input('title'));
        var_dump($request->description);
        var_dump($request);
        echo '</pre>';
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }
}
