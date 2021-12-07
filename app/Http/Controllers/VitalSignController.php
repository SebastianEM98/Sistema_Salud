<?php

namespace App\Http\Controllers;

use App\Http\Requests\VitalSignStore;
use App\Models\VitalSign;
use Illuminate\Http\Request;
use App\Models\User;

class VitalSignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vitalSigns = VitalSign::orderBy('id', 'ASC')->paginate(5);
        return view('dashboard.vital_signs.index',['vitalSigns'=>$vitalSigns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('id','name');
        return view('dashboard.vital_signs.create',['vitalSign' =>new VitalSign(), 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VitalSignStore $request)
    {
        VitalSign::create($request ->validated());
        return back()->with('status','Signos vitales creados con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VitalSign  $vitalSign
     * @return \Illuminate\Http\Response
     */
    public function show(VitalSign $vitalSign)
    {
        return view('dashboard.vital_signs.show',['vitalSign' =>$vitalSign]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VitalSign  $vitalSign
     * @return \Illuminate\Http\Response
     */
    public function edit(VitalSign $vitalSign)
    {
        $users = User::pluck('id','name');
        return view('dashboard.vital_signs.edit',['vitalSign' =>$vitalSign, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VitalSign  $vitalSign
     * @return \Illuminate\Http\Response
     */
    public function update(VitalSignStore $request, VitalSign $vitalSign)
    {
        $vitalSign ->update($request ->validated());
        return back()->with('status','Signos vitales actualizados con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VitalSign  $vitalSign
     * @return \Illuminate\Http\Response
     */
    public function destroy(VitalSign $vitalSign)
    {
        $vitalSign ->delete();
        return back()->with('status', "Signos vitales eliminados con éxito");
    }
}
