<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class cinemahall extends Model
{
  protected $fillable=['id','name','location','ticket'];
  protected $table = 'cinemahall';
}


