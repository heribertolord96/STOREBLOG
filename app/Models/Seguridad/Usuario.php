<?php

namespace App\Models\Seguridad;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Seguridad\Rol;
use App\BlogModels\Persona;
use App\Models\Seguridad\Usuario;
use Illuminate\Support\Facades\Session;

class Usuario extends Authenticatable
{   //use Notifiable;

    protected $remember_token = false;
    protected $table = 'usuario';
    protected $fillable = ['user_name','password', 'condicion'];
    protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany(Rol::class, 'usuario_rol');
    }
    public function personas()
    {
        return $this->belongsToMany(Persona::class, 'usuario');
    }

    public function setSession ($roles){
if(count($roles) == 1){
    Session::put(
        [
            'rol_id'=>$roles[0]['id'],
            'rol_nombre'=>$roles[0]['nombre'],
            'usuario_id'=>$this->id,
            'usuario_nombre'=>$this->user_name,

            'persona_id'=>$personas[0]['id'],
            'persona_id'=>$this->id,
            'persona_nombre'=>$this->nombre,

            
            
        ]
        
        );
}
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
