<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Taxonomy;

class Term extends Model
{
    use HasFactory;

    public function taxonomy() {
        return $this->belongsTo(Taxonomy::class);
    }

    public function parent() {
        return $this->hasOne(self::class);
    }

    public function childs() {
        return $this->belongsTo(self::class);
    }
}
