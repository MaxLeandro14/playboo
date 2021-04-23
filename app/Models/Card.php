<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 
class Card extends Model
{ 
    protected $table = 'cards';
    protected $fillable = ['titulo', 'descricao', 'id_item'];
}