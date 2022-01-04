<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AsalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asal = [
            ['asal_brangkat'=>'Jakarta'],
            ['asal_brangkat'=>'Bogor'],
            ['asal_brangkat'=>'Depok'],
            ['asal_brangkat'=>'Tanggerang'],
            ['asal_brangkat'=>'Bekasi'],

        ];
        //masukan data ke database
        DB::table('asals')->insert($asal);
    }
}
