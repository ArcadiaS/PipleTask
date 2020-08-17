<?php

namespace App\Observers;

use App\Models\Profile;

class ProfileObserver
{
    public function created(Profile $profile)
    {
        $profile->load(['user'])->addToIndex();
    }
    
    public function deleted(Profile $profile)
    {
        $profile->removeFromIndex();
    }
}
