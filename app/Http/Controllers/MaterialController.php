<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\User;

class MaterialController extends Controller
{

    public function create()
    {
        return view('materials.form', [
            'material' => new Material()
        ]);
    }

    public function store(Request $request)
    {

        //Criar um novo material
        $material = new Material();

        //Definindo os valores do material
        $material->name = $request->name;
        $material->description = $request->description;
        $material->user_id = 1;
        $material->file_url = $request->file_url;

        $material->save();

        return redirect("/materials/new");
    }

    public function index()
    {
        $materials = Material::all();
        return view(
            'materials/table',
            ["materials" => $materials]
        );
    }

    public function edit($id)
    {
        $material = Material::findOrFail($id);

        return view('materials.form', [
            'material' => $material
        ]);
    }

    public function update($request)
    {
        $material = Material::findOrFail($request->id);

        $material->name = $request->name;
        $material->description = $request->description;
        $material->file_url = $request->file_url;

        //Salva no BD
        $material->save();

        return redirect('/materials');
    }

    public function destroy($id){
        $material = Material::findOrFail($id);
        $material->delete();
        
        return redirect('/materials');
    }

}
