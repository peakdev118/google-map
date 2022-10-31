<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'Daerah Beaufort',
            'Daerah Beluran',
            'Daerah Kalabakan',
            'Daerah Keningau',
            'Daerah Kinabatangan',
            'Daerah Kota Belud',
            'Daerah Kota Kinabalu',
            'Daerah Kota Marudu',
            'Daerah Kuala Penyu',
            'Daerah Kudat',
            'Daerah Kunak',
            'Daerah Lahad Datu',
            'Daerah Nabawan',
            'Daerah Papar',
            'Daerah Penampang',
            'Daerah Pitas',
            'Daerah Putatan',
            'Daerah Ranau',
            'Daerah Sandakan',
            'Daerah Semporna',
            'Daerah Sipitang',
            'Daerah Tambunan',
            'Daerah Tawau',
            'Daerah Telupid',
            'Daerah Tenom',
            'Daerah Tongod',
            'Daerah Tuaran',
        ];

        for ($i=0; $i < count($data); $i++) { 
            # code...
            DB::table('districts')->insert([
                'content' => $data[$i]
            ]);
        }
    }
}
