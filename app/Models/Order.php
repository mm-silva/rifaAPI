<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Order extends Model{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_order', 'name','wallet_rifa','type_payment','status_payment',
        'id_user','created_at'];

    public $timestamps = false;

}
