<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // protected $fillable = [
    //     'name',
    //     'email',
    //     'password',
    // ];

    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dataStyle()
    {
        return $this->hasOne(DataStyle::class);
    }

    public function dataLogic()
    {
        return $this->hasOne(DataLogic::class);
    }

    public function dataLogicc()
    {
        return $this->hasOne(DataLogicc::class);
    }

    public function dataPretest()
    {
        return $this->hasOne(Pretest::class);
    }

    public function dataPosttest()
    {
        return $this->hasOne(Posttest::class);
    }

    public function dataLogicii()
    {
        return $this->hasOne(DataLogicii::class);
    }

    public function dataOneTrial()
    {
        return $this->hasOne(OneTrial::class);
    }

    public function dataTwoTrial()
    {
        return $this->hasOne(TwoTrial::class);
    }

    public function exercise()
    {
        return $this->hasOne(Exercise::class);
    }

    public function exercisee()
    {
        return $this->hasOne(Exercisee::class);
    }
}
