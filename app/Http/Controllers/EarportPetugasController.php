<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use DataTables;

class EarportPetugasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Petugas::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'.$row->id.'" 
                        data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" 
                        data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('petugas',compact('petugases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Petugas::updateOrCreate(['id' => $request->product_id],
                ['name' => $request->name]);        
        return response()->json(['success'=>'Petugas saved successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $petugas = Petugas::find($id);
        return response()->json($petugas);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Petugas  $petugas
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Petugas::find($id)->delete();
        return response()->json(['success'=>'Petugas deleted successfully.']);
    }
}

