<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;
use DataTables;


class EarportAdminController extends Controller
{
public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Akun::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Edit" 
                           class="edit btn btn-primary btn-sm editAkun">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Delete" 
                           class="delete btn btn-danger btn-sm deleteAkun">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view("{{route('admin_akun_admin')}}",compact('users'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Akun::updateOrCreate(['id' => $request->user_id],
            ['name'         =>  $request->name, 
            'username'      =>  $request->username,
            'email'         =>  $request->email,
            'password'      =>  ($request->password),
            'role'          =>  $request->role,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'no_hp'         =>  $request->no_hp,
            'alamat'        =>  $request->alamat,
            ]);        
        return response()->json(['success'=>'Akun saved successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $akun = Akun::find($id);
        return response()->json($akun);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Akun  $akun
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Akun::find($id)->delete();
        return response()->json(['success'=>'Akun deleted successfully.']);
    }
}