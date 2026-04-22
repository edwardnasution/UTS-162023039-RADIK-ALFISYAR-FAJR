<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password123'),
            ]
        );

        Product::create([
            'user_id' => $user->id,
            'nama_produk' => 'Laptop ASUS VIVOBOOK',
            'kode_produk' => 'LP-001',
            'stok' => 15,
            'harga' => 8500000,
        ]);

        Product::create([
            'user_id' => $user->id,
            'nama_produk' => 'Mouse Wireless Logitech',
            'kode_produk' => 'MS-002',
            'stok' => 30,
            'harga' => 250000,
        ]);
    }
}
