<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPc extends Model
{
    protected $table='pc';
    protected $fillable=['name','id_processor','id_mb','video','power_supply'];

    public function relMB()
    {
        return $this->hasOne('App\Models\ModelMB','id','id_mb');
    }
    public function relProcessor()
    {
        return $this->hasOne('App\Models\ModelProcessor','id','id_processor');
    }
}
