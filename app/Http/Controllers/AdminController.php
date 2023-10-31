<?php

namespace App\Http\Controllers;

use App\Models\RegisterModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin');
    }

    public function getData()
    {
        try {
            $data = RegisterModel::all();

            return response()->json(['data' => $data, 'message' => 'Login successful']);
        } catch (\Exception $e) {
            // Handle validation errors
            return response()->json(['errors' => $e->errors()], 422);
        }
    }

    public function getChart()
    {

    }

}
