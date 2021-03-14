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
            $detail = new Detail;

            $jenis_kelamin = ['L', 'P'];

            $saveDetail = $detail->create([
                'name' => $faker->name,
                'alamat' => $faker->address,
                'jenis_kelamin' => Arr::random($jenis_kelamin),
                'pekerjaan' => $faker->company,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $saveDetail->save();

            $login = new Login;
            $username = strtoupper(Str::random(5));
            $password = Hash::make($username, [
                'rounds' => 12,
            ]);
            $defaultToken = Str::random(16);
            $token = Hash::make($defaultToken, [
                'rounds' => 12,
            ]);
            $saveLogin = $login->create([
                'username' => $username,
                'password' => $password,
                'email' => $faker->email,
                'telepon' => $faker->phoneNumber,
                'token' => $token,
                'level' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $saveLogin->detail()->associate($saveDetail->id);
            $saveLogin->save();
        }
        return redirect()->route('home');
    }

    public function generate_produk()
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i < 5; $i++) {
            //
        }
    }
}
