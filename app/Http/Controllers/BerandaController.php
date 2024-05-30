<?php

namespace App\Http\Controllers;

use App\City;
use App\Province;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $provinces = $this->getProvince();
        return view('view.beranda', compact('provinces'));
    }

    public function getProvince()
    {
        return Province::pluck('title', 'code');
    }

    public function getCities($id){
        return City::where('province_code', $id)->pluck('title', 'code');
    }
}
