<?php

namespace App\Http\Controllers;

use App\Models\ModelAdmin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsersRequest;

class AdminController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataadmin = ModelAdmin::all();
        return view('/admin/index', ['admin' => $dataadmin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUsersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
       ModelAdmin::create([
            'nama' =>$request->nama,
            'email' =>$request->email,
            'username' =>$request->username,
            'password' =>$request->password
        ]);
        return redirect()->route('admin.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = ModelAdmin::where('id', $id)->first();
        return view('profil_admin', ['admin'=>$admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataadmin = ModelAdmin::find($id);
        return view('form_ubah', ['admin'=>$dataadmin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUsersRequest  $request
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = ModelAdmin::find($id);
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = $request->password;
        $admin->save();

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = ModelAdmin::find($id);
        $admin->delete();

        return redirect()->route('admin.index');
    }
}
