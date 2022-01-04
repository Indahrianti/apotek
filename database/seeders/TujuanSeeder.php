<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TujuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tujuan = [
            ['tujuan_brangkat'=>'Jakarta'],
            ['tujuan_brangkat'=>'Bogor'],
            ['tujuan_brangkat'=>'Depok'],
            ['tujuan_brangkat'=>'Tanggerang'],
            ['tujuan_brangkat'=>'Bekasi'],

        ];
        //masukan data ke database
        DB::table('tujuans')->insert($tujuan);
    }
}
