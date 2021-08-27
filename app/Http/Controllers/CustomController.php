<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use App\Models\Porto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomController extends Controller
{
    public function landing()
    {
        $data = Porto::all();
        $pesan = Pesan::orderBy("id", "DESC")->get();
        return view('landing', compact('data', 'pesan'));
    }
    public function tambahData(Request $request)
    {
        Porto::create([
            'gambar' => $request->file("gambar")->getClientOriginalName(),
            'judul' => $request->judul
        ]);
        $request->file('gambar')->storeAs('public/images', $request->file('gambar')->getClientOriginalName());
        return back();
    }
    public function hapusData($id)
    {
        Porto::where("id", $id)->delete();
        return back();
    }

    public function login()
    {
        return view('login');
    }
    public function loginAuth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            return back()->with("pesan", "Username atau Password Salah");
        }
    }
    public function logout()
    {
        Auth::logout();
        return back();
    }

    public function kirimPesan(Request $request)
    {
        Pesan::create($request->all());
        return back();
    }
}
