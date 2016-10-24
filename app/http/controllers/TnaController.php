<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tna;

class TnaController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$tnas = Tna::all();
return view('index', compact('tnas'));
}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('create');
}

/**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$tnas = new Tna();
$tnas->soal = $request->soal;
$tnas->grup_soal = $request->grup_soal;
$tnas->jawaban = $request->soal1;
$tnas->save();
return redirect()->route('home.index');
}

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
$tnas = Tna::findOrFail($id);
return view('edit', compact('tnas'));
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$tnas = Tna::findOrFail($id);

$tnas->jawaban = $request->soal1;
$tnas->save();
return redirect()->route('home.index');
}

public function update12(Request $request, $id)
{
$tnas = Tna::findOrFail($id);
$tnas->soal = $request->soal;
$tnas->grup_soal = $request->grup_soal;
$tnas->jawaban = $request->soal1;
$tnas->save();
return redirect()->route('home.index');
}
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
$tnas = Tna::findOrFail($id);
$tnas->delete();
return redirect()->route('home.index');
}
}