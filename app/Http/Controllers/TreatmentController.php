<?php

namespace App\Http\Controllers;

use App\Http\Requests\TreatmentStore;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatments = Treatment::orderBy('id', 'ASC')->paginate(5);
        return view('dashboard.treatments.index',['treatments'=>$treatments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('id','name');
        return view('dashboard.treatments.create',['treatment' =>new Treatment(), 'users'=>$users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TreatmentStore $request)
    {
        Treatment::create($request ->validated());
        return back()->with('status','Tratamiento creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        return view('dashboard.treatments.show',['treatment' =>$treatment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment)
    {
        $users = User::pluck('id','name');
        return view('dashboard.treatments.edit',['treatment' =>$treatment, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(TreatmentStore $request, Treatment $treatment)
    {
        $treatment ->update($request ->validated());
        return back()->with('status','Tratamiento actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {
        $treatment ->delete();
        return back()->with('status', "Tratamiento eliminado con éxito");
    }
}
