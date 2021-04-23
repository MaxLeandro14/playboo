<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 
class Categoria extends Model
{ 
    protected $table = 'categories';
    protected $fillable = ['nome', 'posicao', 'id_grupo'];
}