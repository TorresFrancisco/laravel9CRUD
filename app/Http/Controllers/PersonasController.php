<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index(){
        //Página de inicio
        $datos = Personas::orderBy('id','asc')->paginate(10);
        return view('inicio', compact('datos'));
    }

    public function create(){
        //Formulario donde agergamos datos
        return view ('agregar');
    }

    public function store(Request $request){
        //Guarda datos en la DB
        $personas = new Personas();
        $personas->nombre = $request->post('nombre');
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Agregado con éxito!");
    }

    public function show($id){
        //Obtener registros de nuestra tabla
        $personas = Personas::find($id);
        return view('eliminar', compact('personas'));
    }

    public function edit($id){
        //Nos trae los datos que se editaran y los coloca en un formulario
        $personas = Personas::find($id);
        return view ('actualizar', compact('personas'));
    }

    public function update(Request $request, $id){
        //Actualiza los datos en la DB
        $personas = Personas::find($id);
        $personas->nombre = $request->post('nombre');
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "Actualizado con éxito!");
    }

    public function destroy($id){
        //Elimina un registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "Eliminado con éxito!");
    }
}
