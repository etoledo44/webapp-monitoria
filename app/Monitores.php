<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Monitores extends Model
{
    protected $table="monitores";
    protected $fillable = [
        'nome', 'email'
    ];
}