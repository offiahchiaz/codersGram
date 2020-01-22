<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description', 'url', 'image'
    ];

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/tgpaQ1EtJi5Wj5EFpjt88dJb728eP7be5MwSWd25.jpeg';
        
        return '/storage/' . $imagePath;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
