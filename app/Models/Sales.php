<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Sales
 * @package App\Models
 * @version September 29, 2021, 12:27 pm UTC
 *
 * @property string $Product_Brand
 * @property string $Product_Model
 * @property string $Start_Of_Sale
 * @property string $End_Of_Sale
 * @property string $Sale_Code
 */
class Sales extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'sales';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Product_Brand',
        'Product_Model',
        'Start_Of_Sale',
        'End_Of_Sale',
        'Sale_Code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Product_Brand' => 'string',
        'Product_Model' => 'string',
        'Start_Of_Sale' => 'date',
        'End_Of_Sale' => 'date',
        'Sale_Code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Product_Brand' => 'required|string|max:255',
        'Product_Model' => 'required|string|max:255',
        'Start_Of_Sale' => 'required',
        'End_Of_Sale' => 'required',
        'Sale_Code' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
