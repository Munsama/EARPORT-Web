<?php
     
namespace App\Http\Controllers;

use App\Solution;
use Illuminate\Http\Request;
use DataTables;

class EarportSolusiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Solution::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Edit" 
                           class="edit btn btn-primary btn-sm editSolution">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Delete" 
                           class="delete btn btn-danger btn-sm deleteSolution">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('solusi',compact('solutions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Solution::updateOrCreate(['id' => $request->solusi_id],
                ['name' => $request->name]);        
        return response()->json(['success'=>'Solution saved successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $solution = Solution::find($id);
        return response()->json($solution);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solution  $solution
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Solution::find($id)->delete();
        return response()->json(['success'=>'Solution deleted successfully.']);
    }
}
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */

//     public function index()
// {
//     $data_solusi = \App\Solution::all();  
//         return view('admin.solusi',['data_solusi' => $data_solusi]);
// }
 
// public function create(Request $request)
// {
//     \App\Solution::create($request->all());
//         return redirect("/admin_informasi_solusi")->with('sukses','Data Berhasil Ditambah');
// } 
 
// public function update(Request $request, $id)
// {
//     $solusi = \App\Solution::find($id);
//         $solusi->update($request->all());
//         return redirect('/solusi');
// }
// public function delete($id)
// {
//     $hapus = \App\Solution::find($id);
//         $hapus->where('id',$id)->delete($id);
//         return redirect('/siswa')->with('sukses', 'Data Berhasil Dihapus');
// }
// /**
//  * Store a newly created resource in storage.
//  *
//  * @param  \Illuminate\Http\Request  $request
//  * @return \Illuminate\Http\Response
//  */
// public function store(Request $request)
// {  
    
// }
 
 
// /**
//  * Show the form for editing the specified resource.
//  *
//  * @param  \App\Solusi  $solusi
//  * @return \Illuminate\Http\Response
//  */
// public function edit($id)
// {   
    
// }
 
 
// /**
//  * Remove the specified resource from storage.
//  *
//  * @param  \App\Solusi  $solusi
//  * @return \Illuminate\Http\Response
//  */
// public function destroy($id)
// {
    
// }
// }