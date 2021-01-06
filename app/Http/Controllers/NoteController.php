<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        // var_dump(Note::all());
    }

    public function show($id)
    {
        echo 'tentativa de get com parâmetro';
        echo $id;
    }

    public function store(Request $request)
    {
        // echo 'Houve uma tentativa no POST';
        // $Note = new Note;
        // $Note->title

        echo '<pre>';
        var_dump($request->title);
        var_dump($request->description);
        var_dump($request->folder_id);
        var_dump($request->archived);
        echo '</pre>';
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }
}
