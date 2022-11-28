<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Status;
use Validator;
use DataTables;

class EarportStatusController extends Controller
{
public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Status::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Edit" 
                           class="edit btn btn-primary btn-sm editStatus">Edit</a>';
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  
                           data-id="'.$row->id.'" data-original-title="Delete" 
                           class="delete btn btn-danger btn-sm deleteStatus">Delete</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('Status',compact('statuses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Status::updateOrCreate(['id' => $request->status_id],
                ['name' => $request->name]);        
        return response()->json(['success'=>'Status saved successfully.']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $status = Status::find($id);
        return response()->json($status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Status::find($id)->delete();
        return response()->json(['success'=>'Status deleted successfully.']);
    }
}