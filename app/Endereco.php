<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Endereco extends Model
{
    protected $table = 'enderecos';

    public $primaryKey = 'id';

    public function user() {
        return $this->belongsTo('App\User', 'cod_pessoa');
        
    }
}





    