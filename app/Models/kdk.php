<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\kdk_gamintojas;
use App\Models\kdk_tipas;

class kdk extends Model
{
    protected $fillable = ['name','gamintojas_id', 'tipas_id','kiekis', 'aprasas', 'kaina'  ];
    use SoftDeletes; // Naudojame SoftDeletes
    protected $dates = ['deleted_at'];

    public function kdk_tipas()
    {
        return $this->belongsTo(kdk_tipas::class, 'tipas_id');
    }

    public function kdk_gamintojas()
    {
        return $this->belongsTo(kdk_gamintojas::class, 'gamintojas_id');
    }
}
