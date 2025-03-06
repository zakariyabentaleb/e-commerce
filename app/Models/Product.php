<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name is the plural of the model)
    protected $table = 'products';

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
        'image',  
    ];

    // Define the relationship to the category (assuming there's a 'categories' table)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
