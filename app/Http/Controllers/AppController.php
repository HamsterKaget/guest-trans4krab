<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('home');
    }

    public function viewRegister() {
        return view('registrasi');
    }

    public function register(Request $request) {
        try {
            $request->validate([
                'nama' => 'required',
                'alamat' => 'nullable',
                'telp' => 'nullable',
                'email' => 'required|unique:register,email',
                'instansi' => 'required',
            ]);

            RegisterModel::create([
                'nama' => $request->input('nama'),
                'alamat' => $request->input('alamat'),
                'telp' => $request->input('telp'),
                'email' => $request->input('email'),
                'instansi' => $request->input('instansi'),
                'jenis_pengunjung' => $request->input('jenis_pengunjung'),
            ]);

            // Optionally, you can return a response to indicate success
            return response()->json(['message' => 'Registration successful']);
        } catch (\Exception $e) {
            // Handle validation errors
            return response()->json(['errors' => $e->errors()], 422);
        }
    }


    public function viewLogin() {
        return view('login');
    }


    public function login(Request $request) {
        // dd('ada');
        try {
            $request->validate([
                'id' => 'required',
            ]);

            // $email = $request->input('email');

            // $data = RegisterModel::where('email', $email)->first();
            // dd('ada');
            $data = RegisterModel::findOrFail($request->input('id'));
            $data->status = 1;
            $data->save();

            // if ($data) {
            //     // User with the provided email exists
            //     return response()->json(['data' => $data, 'message' => 'Login successful']);
            // } else {
            //     // Handle the case where the user does not exist
            //     return response()->json(['message' => 'User with the provided email does not exist'], 404);
            // }
            return redirect(route('success'));
        } catch (\Exception $e) {
            // Handle validation errors
            dd($e);
            // return response()->json(['errors' => $e->errors()], 422);
        }
    }


    public function show(Request $request) {
        try {
            $request->validate([
                'email' => 'required|email|exists:register,email',
            ]);

            $email = $request->input('email');

            $data = RegisterModel::where('email', $email)->first();

            if ($data) {
                // User with the provided email exists
                return response()->json(['data' => $data, 'message' => 'Login successful']);
            } else {
                // Handle the case where the user does not exist
                return response()->json(['message' => 'User with the provided email does not exist'], 404);
            }
        } catch (\Exception $e) {
            // Handle validation errors
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function success() {
        return view('success');
    }
}
