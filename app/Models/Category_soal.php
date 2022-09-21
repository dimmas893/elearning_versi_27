<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_soal extends Model
{
    use HasFactory;
    protected $table = 'category_soal';
    protected $fillable = ['name', 'kelas_id', 'master_category_soal_id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function master_category_soal()
    {
        return $this->belongsTo(Kelas::class, 'master_category_soal_id', 'id');
    }

    public function categoryQuestions()
    {
        return $this->hasMany(Pertanyaan::class);
    }
}
