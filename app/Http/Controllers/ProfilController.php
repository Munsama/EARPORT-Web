<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class ProfilController extends Controller
{
    //
    public function indexprofil()
    {
        return view ('admin.profil', array ('admin'=>Auth::admin()));
    }
    public function editprofil (Request $request)
    {
        if ($request->hasFile('foto'))
        {
            $foto = $request->file ('foto');
            $filename = time(). '.' . $foto->getClientOriginalExtension();
            Image::make($foto)->resize(300,300)->save (public_path('/img/upload/foto/'.$filename));

            $admin = Auth::admin();
            $admin ->foto = $filename;
            $admin-> save();

            $this->validate($request,[
                'name'=> 'required|max:255',
                'username'=> 'required|max:255|unique:admins',
                'email'=> 'required|max:255|email',
                'password'=> 'required|min:8|max:255|confirmed',
            ]);
            Auth::admin()->update([
                'name'=>$request->name,
                'username'=>$reuqest->username,
                'email'=>$request->email,
                'password'=>$reuqest->password,
                
            ]);
        }
        return view('admin.profil', array ('admin'=> Auth::admin()));
    }

}
