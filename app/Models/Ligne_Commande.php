<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne_Commande extends Model
{
    use HasFactory;

    protected $primaryKey="id";

    protected $faillable=["quantity","ticker_id","order_id"];

    protected $guarded=["id"];
}
