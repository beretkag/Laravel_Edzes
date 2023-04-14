<?php

namespace App\Http\Controllers;

use App\Models\edzes;
use Illuminate\Http\Request;

class EdzesController extends Controller
{
    public function index()
    {
        $edzesek =  edzes::all();
        return view('edzesek', ['edzesek' => $edzesek]);
    }

    public function create()
    {
        return view('newedzes');
    }

    public function store(Request $request)
    {
        $data = [
            "date"=>$request->date,
            "description"=>$request->description,
            "duration"=>$request->duration,
            "completed"=>$request->completed
        ];

        edzes::insert($data);

       return redirect('/');
    }

    public function show(string $id)
    {
        $edzes = edzes::find($id);
        return view('show',  ['edzes' => $edzes]);
    }

    public function edit(edzes $edzes)
    {
        $edzes = edzes::find($id);
        return view('editedzes', ['edzes' => $edzes]);
    }

    public function update(Request $request, string $id)
    {
        $data = [
            "date"=>$request->date,
            "description"=>$request->description,
            "duration"=>$request->duration,
            "completed"=>$request->completed
        ];

        edzes::where('id', $id)->update($data);

       return redirect('/');
    }

    public function destroy(string $id)
    {
        edzes::where('id', $id)->delete();
        return redirect('/');
    }
}
