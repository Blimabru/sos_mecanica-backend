<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'cliente',
        'colaborador',
        'google_id',
        'data_nascimento',
        'cpf',
        'rg',
        'telefone_1',
        'telefone_2',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];

    public function colaborador(): belongsTo
    {
        return $this->belongsTo(Colaborador::class, 'id', 'id_user');
    }

    public function cliente(): belongsTo
    {
        return $this->belongsTo(Cliente::class, 'id', 'id_user');
    }

    public function endereco(): belongsTo
    {
        return $this->belongsTo(Endereco::class, 'id_endereco', 'id_endereco');
    }
}
