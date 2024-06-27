<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $primaryKey="id";

    protected $fillable=["wording","price","number_place","type","event_id","template_id"];

    protected $guarded=["id"];
}
