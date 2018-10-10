<?php

use Illuminate\Database\Seeder;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <11 ; $i++) { 
          DB::table('mahasiswa')->insert([
            'nim' => '16180'.$i,
            'nama' => 'mahasiswa '.$i,
            'alamat' => 'Jln mati '.$i,
            'telp' => '089999'.$i,
            'email' => 'mahasiswa-'.$i.'@gmail.com'
          ]);
        }
    }
}
