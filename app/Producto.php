<?php

namespace Storelaravel;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['user_id','pricing','description','pricing','id'];

    /*public function paypalItem(){
    	return \PaypalPayment::item()->setName($this->title)
    								->setDescription($this->description)
    								->setCurrency('USD')
    								->setQuantity(1)
    								->setPrice($this->pricing);


    }*/

}
