<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;

class Commande extends Model
{
    use HasFactory;

    protected $primaryKey="id";

    protected $fillable=["order_date"];

    protected $guarded=["id"];

    public function ligne_commandes():BelongsTo{

        return $this->belongsTo(Ligne_Commande::class);
    }

}
