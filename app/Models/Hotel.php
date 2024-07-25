<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address', 'place_id'];

    // Bir otel bir yere aittir
    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
