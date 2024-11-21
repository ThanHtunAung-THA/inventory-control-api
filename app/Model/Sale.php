<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{

    // Specify the table name if it is not plural of the model name
    protected $table = 'sales';

    // Define the primary key if it's not 'id'
    protected $primaryKey = 'id';

    // Define the attributes that are mass assignable
    protected $fillable = [
        'date',
        'user_code',
        'item_code',
        'location',
        'customer',
        'payment_type',
        'currency',
        'quantity',
        'discount_and_foc',
        'paid',
        'total',
        'balance',
    ];

    // Relationships (define if user_code and admin_code are referencing other tables)
    
    // Relationship with User model (assuming `user_code` refers to a user)
    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_code', 'user_code');
    // }

    // // Relationship with Admin model (assuming `admin_code` refers to an admin)
    // public function admin()
    // {
    //     return $this->belongsTo(Admin::class, 'admin_code', 'user_code');
    // }

    // Optionally, you might want to add timestamps for when the sale was created and updated
    public $timestamps = true; // Default behavior of 'created_at' and 'updated_at'

    // You can also hide sensitive information from JSON serialization
    // protected $hidden = [
    //     'user_code', 'admin_code', // hide sensitive foreign keys if needed
    // ];

    // Accessors or Mutators can be defined for certain fields if needed
}
