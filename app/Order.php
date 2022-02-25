<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable= [
        'user_id','paiement_firstname','paiement_name','paiement_phone',
        'paiement_email','paiement_address','paiement_city',
        'paiement_postalcode','discount','paiement_total',
    ];
    public function user(){
        return $this->belongsTo('App/User');
    }

    public function products(){
        return $this->belongsToMany('App/Products')->withPivot('quantity');
    }
}
