<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        // echo 'entrou na index';
        var_dump(Folder::all());
    }

    public function show(Int $id)
    {
        // Para validações basta criar middlewares 
        $Folder = Folder::find(100);
    }

    public function store(Request $request)
    {
        $Folder = new Folder;
        $Folder->title = $request->title;
        $Folder->actived = $request->actived;
        return $Folder->save();
    }

    public function edit()
    {
        
    }

    public function update()
    {

    }
}
