<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Relations\BelongsTo;
class Entreprise extends Model
{
    use HasFactory;

    protected $primarykey="id";

    protected $fillable=["name","country","city","address","neighborhood","user_id"];

    protected $guarded=["id"];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
