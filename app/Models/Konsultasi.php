<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\KonsultasiMail;
use Carbon\Carbon;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsultasi';
    protected $guarded = ['id'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'jawaban_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['status'];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($konsultasi) {
            $konsultasi->jawaban_by = Auth::id();
            $konsultasi->jawaban_at = Carbon::now();
            Mail::to($konsultasi->email)->send(new KonsultasiMail($konsultasi));
        });
    }


    // Getters
    public function getJawabanByAttribute($value)
    {
        return User::find($value);
    }

    public function getStatusAttribute()
    {
        return is_null($this->attributes['jawaban_at']) ? "Belum Dijawab" : "Dijawab Pada ". date('d-m-Y');
    }

}
