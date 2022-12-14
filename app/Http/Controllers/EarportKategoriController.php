<?php
     
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DataTables;
use Response;

class EarportKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Edit" 
                           class="edit btn btn-primary btn-sm editCategory">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Delete" 
                           class="delete btn btn-danger btn-sm deleteCategory">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('kategori',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Category::updateOrCreate(['id' => $request->kategori_id],
                ['name' => $request->name]);        
        return response()->json(['success'=>'Category saved successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $category = Category::find($id);
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Category::find($id)->delete();
        return response()->json(['success'=>'Category deleted successfully.']);
    }
}