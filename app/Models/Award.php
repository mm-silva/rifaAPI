<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Award extends Model{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_award', 'name','number_lucky','final_date','description',
    'slug','id_boss','json_list','created_at'];

    public $timestamps = false;

}
