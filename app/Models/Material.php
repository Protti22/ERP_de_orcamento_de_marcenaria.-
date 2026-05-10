<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'price',
        'unit',
        'width',
        'height',
        'thickness',
    ];

    protected $casts = [
        'price'     => 'decimal:2',
        'width'     => 'decimal:2',
        'height'    => 'decimal:2',
        'thickness' => 'decimal:2',
    ];

    const TYPES = [
        'mdf'       => 'MDF',
        'hardware'  => 'Ferragem',
        'edge_tape' => 'Fita de Borda',
        'accessory' => 'Acessório',
        'other'     => 'Outro',
    ];

    public function getTypeLabelAttribute(): string
    {
        return self::TYPES[$this->type] ?? $this->type;
    }
}
