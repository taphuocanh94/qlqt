<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Term;

class Taxonomy extends Model
{
    use HasFactory;

    public function terms() {
        return $this->hasMany(Term::class);
    }

    public function parent() {
        return $this->hasOne(self::class, 'parent_id');
    }

    public function childs() {
        return $this->hasMany(self::class, 'parent_id');
    }
}
