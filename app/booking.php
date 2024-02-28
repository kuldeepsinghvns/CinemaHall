<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    protected $fillable=['hallid','id','name','date'];
    protected $table='booking';
}