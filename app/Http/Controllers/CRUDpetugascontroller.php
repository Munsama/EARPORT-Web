<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;
use Validator;
use Hash;

class CRUDpetugascontroller extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            if(request()->ajax())
            {
                return datatables()->of(Akun::latest()->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('petugas', compact('users'));
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
                'name'          => 'required',
                'username'      => 'required',
                'email'         => 'required',
                'password'      => 'required',
                'role'          => 'required',
                'jenis_kelamin' => 'required',
                'no_hp'         => 'required',
                'alamat'        => 'required',
                'image'         => 'required|image|max:2048'
            );
    
            $error = Validator::make($request->all(), $rules);
    
            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }
    
            $image = $request->file('image');
    
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
    
            $image->move(public_path('images'), $new_name);
            
            $form_data = array(
                'name'          =>  $request->name,
                'username'      =>  $request->username,
                'email'         =>  $request->email,
                'password'      =>  Hash::make($request->password),
                'role'          =>  $request->role,
                'jenis_kelamin' =>  $request->jenis_kelamin,
                'no_hp'         =>  $request->no_hp,
                'alamat'        =>  $request->alamat,
                'image'         =>  $new_name
            );
    
            Akun::create($form_data);
    
            return response()->json(['success' => 'Data Added successfully.']);
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
            if(request()->ajax())
            {
                $data = Akun::findOrFail($id);
                return response()->json(['data' => $data]);
            }
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request)
        {
            $image_name = $request->hidden_image;
            $image = $request->file('image');
            if($image != '')
            {
                $rules = array(
                'name'          => 'required',
                'username'      => 'required',
                'email'         => 'required',
                'password'      => 'required',
                'role'          => 'required',
                'jenis_kelamin' => 'required',
                'no_hp'         => 'required',
                'alamat'        => 'required',
                'image'         => 'required|image|max:2048'
                );
                $error = Validator::make($request->all(), $rules);
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
    
                $image_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $image_name);
            }
            else
            {
                $rules = array(
                'name'          => 'required',
                'username'      => 'required',
                'email'         => 'required',
                'password'      => 'required',
                'role'          => 'required',
                'jenis_kelamin' => 'required',
                'no_hp'         => 'required',
                'alamat'        => 'required'

                );
    
                $error = Validator::make($request->all(), $rules);
    
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
            }
    
            $form_data = array(
                'name'          =>  $request->name,
                'username'      =>  $request->username,
                'email'         =>  $request->email,
                'password'      =>  Hash::make($request->password),
                'role'          =>  $request->role,
                'jenis_kelamin' =>  $request->jenis_kelamin,
                'no_hp'         =>  $request->no_hp,
                'alamat'        =>  $request->alamat,
                'image'         =>  $image_name
            );
            Akun::whereId($request->hidden_id)->update($form_data);
    
            return response()->json(['success' => 'Data is successfully updated']);
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $data = Akun::findOrFail($id);
            $data->delete();
        }
    }

