<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelProcessor;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelProcessor $processor)
    {
        $processor->create([
            'id_mb'=>'2',
            'model'=>'Intel Core i5-9400F Coffee Lake',
            'socket'=>'Lga 1151'
        ]);
        $processor->create([
            'id_mb'=>'3',
            'model'=>'Intel Core i5-4440 6MB 3.1GHz',
            'socket'=>'Lga 1150'
        ]);
        $processor->create([
            'id_mb'=>'1',
            'model'=>'Intel Celeron Core 2 Duo',
            'socket'=>'Lga 775'
        ]);
        $processor->create([
            'id_mb'=>'4',
            'model'=>'AMD Ryzen 9 3950X',
            'socket'=>'AM4'
        ]);
        $processor->create([
            'id_mb'=>'4',
            'model'=>'AMD Ryzen 5 3400G',
            'socket'=>'AM4'
        ]);
        $processor->create([
            'id_mb'=>'2',
            'model'=>'Intel Core i3-8100 Coffee Lake',
            'socket'=>'Lga 1151'
        ]);
    }
}
