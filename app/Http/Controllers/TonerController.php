<?php

namespace App\Http\Controllers;

use App\Models\Toner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Toner::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(

            'type'              =>  'required',
            'department'        =>  'required',
            'pieces'            =>  'required',
            'date'              =>  'required',
            'user'              =>  'required'

        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }

        $form_data = array(

            'type'              =>  $request->type,
            'department'        =>  $request->department,
            'pieces'            =>  $request->pieces,
            'date'              =>  $request->date,
            'user'              =>  $request->user
        );

        Toner::create($form_data);

        return response()->json(['success' => 'Toner vydán a uložen do databáze']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function show(Toner $toner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function edit(Toner $toner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Toner $toner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toner  $toner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Toner $toner)
    {
        //
    }
}
