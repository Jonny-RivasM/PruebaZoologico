<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $text=trim($request->get('text'));
        $animals=DB::table('animals')
                        ->select('id','name', 'species', 'gender', 'bithdate', 'admissiondate', 'color', 'race', 'photo')
                        ->where('name', 'LIKE','%'.$text.'%')
                        ->orWhere('species','LIKE','%'.$text.'%')
                        ->orWhere('race','LIKE','%'.$text.'%')
                        ->orderBy('species', 'asc')
                        ->paginate(15);
        return view('animal.animals', compact('animals','text'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $users=User::all();
        return view('animal.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $animal=new Animal;
        $animal->name=$request->input('name');
        $animal->species=$request->input('species');
        $animal->gender=$request->input('gender');
        $animal->bithdate=$request->input('bithdate');
        $animal->admissiondate=$request->input('admissiondate');
        $animal->color=$request->input('color');
        $animal->race=$request->input('race');
        $animal->photo = $request->input('photo');
        $animal->user_id=$request->input('user_id');

        $animal->save();
        return redirect('animals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal=Animal::findOrFail($id);
        $animal->users=User::all();
        return view('animal.edit',$animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animal=Animal::findOrFail($id);
        $animal->name=$request->input('name');
        $animal->species=$request->input('species');
        $animal->gender=$request->input('gender');
        $animal->bithdate=$request->input('bithdate');
        $animal->admissiondate=$request->input('admissiondate');
        $animal->color=$request->input('color');
        $animal->race=$request->input('race');
        if($animal->photo) {
            $animal->photo = $request->input('photo');
        }
        $animal->save();
        return redirect('animals');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal=Animal::findOrFail($id);
        $animal->delete();
        return redirect('animals');

    }
}
