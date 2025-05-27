<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kdk extends Model
{
    protected $fillable = ['name','kdk_gamintojas_id', 'kdk_tipas_id','kiekis', 'aprasas', 'kaina'  ];

    public function kdk_tipas()
    {
        return $this->belongsTo(kdk_tipas::class, 'kdk_tipas_id');
    }

    public function kdk_gamintojas()
    {
        return $this->belongsTo(kdk_gamintojas::class, 'kdk_gamintojas_id');
    }
}
