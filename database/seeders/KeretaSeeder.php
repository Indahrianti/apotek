<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class KeretaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kereta = [
            ['nama_KA'=>'Bahari', 'asal_id'=>1, 'tujuan_id'=>2],
            ['nama_KA'=>'Karya', 'asal_id'=>2, 'tujuan_id'=>3],
            ['nama_KA'=>'Mulia', 'asal_id'=>3, 'tujuan_id'=>1],

        ];
        //masukan data ke database
        DB::table('keretas')->insert($kereta);
    }
}
