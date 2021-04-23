<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 
class Anexo extends Model
{ 
    protected $table = 'anexos';
    protected $fillable = ['url', 'id_card', 'id_user'];
}