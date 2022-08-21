<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('back.user.index', [
            'title' => 'User Profil',
            'itemprofil' => User::where('id', $request->user()->id)->first()
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('back.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {

        if (empty($request->file('foto'))) {

            $user = User::find($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,

            ]);
            Alert::info('Update', 'Data Berhasil Terupdate');
            return redirect()->route('user.index');
        } else {
            $user = User::find($id);
            Storage::delete($user->foto);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'foto' => $request->file('foto')->store('user'),
            ]);
            return redirect()->route('user.index')->with(['success' => 'Data Berhasil diupdate']);
        }
    }
}
