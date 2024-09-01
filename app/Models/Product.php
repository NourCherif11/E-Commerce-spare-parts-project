<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product_image;
use App\Models\Brand;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;
    protected $table = 'products';


    protected $fillable = ['name', 'brand_id', 'category_id', 'price'];

    public function images_product()
    {
        return $this->hasMany(Product_image::class,'product_id','id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getValidImageAttribute()
    {
        // Default image path
        // Default image path
    $defaultImage = 'assets/images/products/default.jpg';

    // Check if the product has any valid images
    foreach ($this->images_product as $image) {
        $imagePath = "assets/images/products/{$image->image_path}";

        if (file_exists(public_path($imagePath))) {
            return asset($imagePath);
        }
    }

        // Return the default image if no valid image is found
        return $defaultImage;
    }
}
