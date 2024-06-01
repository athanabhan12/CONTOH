<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class PanitiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $panitias = User::all();
        return view('panitia',compact('panitias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $panitia = Role::all();
        return view('tambah_user', compact('panitia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existingUser = User::where('email', $request->email)->first();

        if ($existingUser) {
            // Jika email sudah terdaftar, berikan pemberitahuan
            return redirect()->back()->with('error', 'Email sudah terdaftar. Silakan gunakan email lain.');
        }

        $panitia                                  = new User;
        $panitia->id_role                         = $request->id_role;
        $panitia->nama                            = $request->nama;
        $panitia->email                           = $request->email;
        $panitia->no_telepon                      = $request->no_telepon;
        $panitia->username                        = $request->username;
        $panitia->password                        = password_hash($request->password, PASSWORD_DEFAULT);
        $panitia->jenis_kelamin                   = $request->jenis_kelamin;
        $panitia->save();
         
        return redirect('panitia')->with('success', 'Data panitia berhasil disimpan.');
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
        $panitia = User::whereId($id)->first();
        return view('ubah_user')->with('panitia', $panitia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $panitia                                  = User::find($id);
        $panitia->id_role                         = $request->id_role;
        $panitia->nama                            = $request->nama;
        $panitia->email                           = $request->email;
        $panitia->no_telepon                      = $request->no_telepon;
        $panitia->username                        = $request->username;
        $panitia->jenis_kelamin                   = $request->jenis_kelamin;
        $panitia->save();
        
        return redirect('panitia');
    }

    public function ubah_password($id)
    {
        $panitia = User::whereId($id)->first();
        return view('ubah_password')->with('panitia', $panitia);
    }   

    public function update_password(Request $request, $id)
    {
        $panitia                                  = User::find($id);
        $panitia->password                        = password_hash($request->password, PASSWORD_DEFAULT);
        $panitia->save();

        return redirect('panitia')->with('berhasil', 'Password Berhasil Dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $panitia = User::find($id);
        $panitia->delete();
        return redirect('panitia');
    }
}
