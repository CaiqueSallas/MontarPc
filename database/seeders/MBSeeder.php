<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelMB;

class MBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelMB $mb)
    {
        $mb->create([
            'model'=>'Placa Mãe Intel G41',
            'socket'=>'Lga 775'
        ]);
        $mb->create([
            'model'=>'Placa-Mãe Asus TUF H310M-Plus Gaming/BR',
            'socket'=>'Lga 1151'
        ]);
        $mb->create([
            'model'=>'Placa mãe GigaByte GA-Z87M-D3H',
            'socket'=>'Lga 1150'
        ]);
        $mb->create([
            'model'=>'Placa-Mãe ASRock B450M Steel Legend',
            'socket'=>'AM4'
        ]);
    }
}
