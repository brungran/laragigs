<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'company', 'logo','location', 'website', 'email', 'description', 'tags'];

    public function scopeFilter($query, array $filters){
        if ($filters['tag'] ?? false) {
            $query->where("tags", "ilike", "%" . request('tag') . "%");
        }

        if ($filters['search'] ?? false) {
            $query->where('title', 'ilike', '%' . request('search') . '%')
            ->orWhere('description', 'ilike', '%' . request('search') . '%')
            ->orWhere('tags', 'ilike', '%' . request('search') . '%')
            ->orWhere('location', 'ilike', '%' . request('search') . '%');
        }
    }

    //relationship to user
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
