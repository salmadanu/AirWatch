<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_perusahaan' => 'required|max:255',
            'email_perusahaan' => 'required|max:255|email|unique:perusahaan',
            'username_perusahaan' => 'required|max:255|unique:perusahaan',
            'password_perusahaan' => 'required|min:5|max:255',
            'provinsi_perusahaan' => 'required|max:255',
            'kabupaten_perusahaan' => 'required|max:255',
            'alamat_perusahaan' => 'required',
            'logo_perusahaan' => 'required',
            'nomor_telfon_perusahaan' => 'required|numeric'
        ]);

        $validatedData['password_perusahaan'] = Hash::make($validatedData['password_perusahaan']);
        $perusahaan = Perusahaan::create($validatedData);

        // Auth::login($perusahaan);

        return redirect('/login')->with('success', "Registrasi berhasil! Silahkan Log In");

    }
}
