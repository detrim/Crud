<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CrudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama'      => 'Deni Tri Muslimin',
                'email'                   => 'Deni@mail.com',
                'no_telp'                   => '085201010202',
                'jenis_kelamin'         => 'Laki-laki',
                'alamat'             => 'Dsn Toro, Kel. Dimoro, Kec. Toroh, Kab. Grobogan',
                'nwnp'                      => '11.111.111.1-111.111',
                'nip'                           => '199712062023030004',
                'photos'             => 'default.jpg',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ],
            [
                'nama'      => 'Muslimin Deni Tri',
                'email'                   => 'Muslimin@mail.com',
                'no_telp'                   => '085201010202',
                'jenis_kelamin'         => 'Laki-laki',
                'alamat'             => 'Dsn Toro, Kel. Dimoro, Kec. Toroh, Kab. Grobogan',
                'nwnp'                      => '11.111.111.1-111.114',
                'nip'                           => '199712062023030008',
                'photos'             => 'default.jpg',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ],
            ];

        $this->db->table('karyawan', 'crud')->insertBatch($data);
    }
}
