<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
 
class User_group extends Model
{ 
    protected $table = 'users_groups';
    protected $fillable = ['perfil', 'master', 'metas', 'onboarding', 'id_user', 'id_group'];
}
