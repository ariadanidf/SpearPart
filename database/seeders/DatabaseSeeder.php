<?php

namespace Database\Seeders;
use App\Models\Order;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Order::create([
            'id_customer' => '1',
            'nama_barang' => 'CVT',
            'alamat_penerima' => 'Yogyakarta',
            'order_date' => '2023-05-23',
            'jenis_pengiriman' => 'One Day',
            'berat_barang' => '1',
            'status' => 'Terkirim',
            'harga_barang' => '50000',
            'harga_ongkir' => '23000',
            'total_harga' => '73000',
            'no_resi' => '12345678',
        ]);
    }
}
