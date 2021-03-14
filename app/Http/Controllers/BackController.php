<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Login;
use App\Models\Detail;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class BackController extends Controller
{
    public function generate_user()
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i < 5; $i++) {
            //
        }
    }

    public function generate_produk()
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i < 5; $i++) {
            //
        }
    }
}
