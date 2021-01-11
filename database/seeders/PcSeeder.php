<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelPc;

class PcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelPc $pc)
    {
        $pc->create([
            'name'=>'Computador-1',
            'id_processor'=>'1',
            'id_mb'=>'2',
            'video'=>'GTX 1080 TI',
            'power_supply'=>'Fonte Genérica 600w',
        ]);

        $pc->create([
            'name'=>'Computador-2',
            'id_processor'=>'2',
            'id_mb'=>'3',
            'video'=>'RTX 2080 TI',
            'power_supply'=>'Fonte Genérica 650w',
        ]);

        $pc->create([
            'name'=>'Computador-3',
            'id_processor'=>'3',
            'id_mb'=>'1',
            'video'=>'GT 9500',
            'power_supply'=>'Fonte fraquinha 300w',
        ]);
        $pc->create([
            'name'=>'Computador-4',
            'id_processor'=>'5',
            'id_mb'=>'4',
            'video'=>null,
            'power_supply'=>'Fonte Genérica 600w',
        ]);
    }
}
