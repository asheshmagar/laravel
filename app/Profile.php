<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=[];
    public function profileImage()
    {
        $imagePath = ($this->image) ?  $this->image : '/storage/profile/XUk6Hyc92bFrQTCLxbH1ydGVf68iWE4xHNR8X8G7.png';
        return '/storage/' . $imagePath;
    }
    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}