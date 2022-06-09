<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_kategori',
        'judul','slug',
        'deskripsi',
        'tgl_post',
        'foto'
    ];

    //fungsi untuk search early
    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false ){//jika benar lakukan dibawah, jika salah skip langkah ini
            return $query->where('judul','like','%'.$filters['search'].'%')
                 ->OrWhere('deskripsi','like','%'.$filters['search'].'%');
        }



    }
    //end search

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function komentar(){
        return $this->hasMany(Komentar::class);
    }
     
}
