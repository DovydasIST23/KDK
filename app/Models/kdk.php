<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kdk extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image', 'kdk_tipas_id', 'kdk_gamintojas_id'];

    public function kdk_tipas()
    {
        return $this->belongsTo(kdk_tipas::class, 'kdk_tipas_id');
    }

    public function kdk_gamintojas()
    {
        return $this->belongsTo(kdk_gamintojas::class, 'kdk_gamintojas_id');
    }
}
