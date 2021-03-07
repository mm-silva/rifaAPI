<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Winner extends Model{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_order', 'id_user','won_in_date'];

    public $timestamps = false;

}
