<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $fillable = ['nombre', 'precio', 'stock', 'description', 'categoria_id'];

    /**
     * Relación con categoria
     */
    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }
}
