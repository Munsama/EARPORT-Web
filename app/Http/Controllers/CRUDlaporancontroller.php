<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\Akun;
use App\Category;
use App\Solution;
use Validator;
use DB;

class CRUDlaporancontroller extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $laporan = DB::table('laporans')->join('users','laporans.id_user','=','users.id')
                                                        ->join('solutions', 'laporans.id_solusi','=','solutions.id')
                                                        ->join('categories', 'laporans.id_kategori','=','categories.id')
                                                        
                                ->get();
                        
                        
                        // $category = DB::table('categories')
                        // ->select("*")
                        // ->get();

            if(request()->ajax())
            {
                return datatables()->of(Laporan::latest()->get())
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm  ">Edit</button>';
                            $button .= '&nbsp;&nbsp;';
                            $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                            return $button;
                        })
                        ->rawColumns(['action'])
                        ->make(true);
                        
                        
                        // $user = Akun::pluck('name','id','image');
                        // $kategori = Category::pluck('name','id','image');
                        // $status = Status::pluck('name','id');
                        // $solusi = Solution::pluck('name','id');

                        
            }
            
            return view('laporan',compact('laporans', ));
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
                'id_user'       => 'required',
                'image'         => 'required|image|max:2048',
                'id_kategori'      => 'required',
                'alamat'        => 'required',
                'deskripsi'     => 'required'
                
                
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
                'id_user'       =>  $request->id_user,
                'image'         =>  $new_name,
                'id_kategori'      =>  $request->id_kategori,
                'alamat'        =>  $request->alamat,
                'deskripsi'     =>  $request->deskripsi,
                'status'        =>  $request->status,
                'id_solusi'        =>  $request->id_solusi,
                'tgl_kerja'     =>  $request->tgl_kerja,
                'tgl_selesai'   =>  $request->tgl_selesai
                
            );
    
            Laporan::create($form_data);
    
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
                $data = Laporan::findOrFail($id);
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
                'id_user'       => 'required',
                'image'         => 'required|image|max:2048',
                'id_kategori'      => 'required',
                'alamat'        => 'required',
                'deskripsi'     => 'required',
                'status'        => 'required',
                'id_solusi'        => 'required',
                'tgl_kerja'     => 'required',
                'tgl_selesai'   => 'required',
                
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
                'id_user'       => 'required',
                'id_kategori'      => 'required',
                'alamat'        => 'required',
                'deskripsi'     => 'required',
                'status'        => 'required',
                'id_solusi'        => 'required',
                'tgl_kerja'     => 'required',
                'tgl_selesai'   => 'required'
                

                );
    
                $error = Validator::make($request->all(), $rules);
    
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
            }
    
            $form_data = array(
                'id_user'       =>  $request->id_user,
                'image'         =>  $image_name,
                'id_kategori'      =>  $request->id_kategori,
                'alamat'        =>  $request->alamat,
                'deskripsi'     =>  $request->deskripsi,
                'status'        =>  $request->status,
                'id_solusi'        =>  $request->id_solusi,
                'tgl_kerja'     =>  $request->tgl_kerja,
                'tgl_selesai'   =>  $request->tgl_selesai,
                
                
            );
            Laporan::whereId($request->hidden_id)->update($form_data);
    
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
            $data = Laporan::findOrFail($id);
            $data->delete();
        }
    }

