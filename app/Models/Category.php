<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name is the plural of the model)
    protected $table = 'categories';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
    ];

    // Define the relationship to products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
