<?php
namespace App\Modules\General\Contacts\Models;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    protected $table    = "contacts";
    protected $fillable = ['id','name','email','cpf','phone'];

}