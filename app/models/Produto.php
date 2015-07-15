<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	public $timestamps = false;
    protected $table = "produtos";    
    protected $fillable = array('nome','descricao','valor','quantidade');
    protected $guarded = ['_token'];
    
}
