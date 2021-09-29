<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Pricing
 * @package App\Models
 * @version September 29, 2021, 12:16 pm UTC
 *
 * @property string $Product_Model
 * @property number $Product_Price
 * @property string $Customer_Name
 * @property string $Date_Bought
 * @property string $Warranty_Code
 */
class Pricing extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'pricing';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_Model',
        'Product_Price',
        'Customer_Name',
        'Date_Bought',
        'Warranty_Code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_Model' => 'string',
        'Product_Price' => 'decimal:2',
        'Customer_Name' => 'string',
        'Date_Bought' => 'date',
        'Warranty_Code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_Model' => 'nullable|string|max:255',
        'Product_Price' => 'required|numeric',
        'Customer_Name' => 'required|string|max:255',
        'Date_Bought' => 'required',
        'Warranty_Code' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
