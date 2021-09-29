<?php

namespace App\Repositories;

use App\Models\Pricing;
use App\Repositories\BaseRepository;

/**
 * Class PricingRepository
 * @package App\Repositories
 * @version September 29, 2021, 12:16 pm UTC
*/

class PricingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Product_Model',
        'Product_Price',
        'Customer_Name',
        'Date_Bought',
        'Warranty_Code'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pricing::class;
    }
}
