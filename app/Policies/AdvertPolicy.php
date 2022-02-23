<?php

namespace App\Policies;

use App\Models\Advert;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdvertPolicy
{
    use HandlesAuthorization;

    
    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Advert $post)
    {
        return true;
    }

    
    public function create(User $user)
    {
        return $user->level >= User::AUTHOR_LEVEL;
    }

    
    public function update(User $user, Advert $post)
    {
        if (!$post->exists){
            return $user->level >= User::AUTHOR_LEVEL;
        } else {
            return $user->level == User::AUTHOR_LEVEL && $user->id == $post->user_id
                || $user->level == User::ADMIN_LEVEL && $post->exists;
        }
    }

    
    public function delete(User $user, Advert $post)
    {
        return $user->level == User::AUTHOR_LEVEL && $user->id == $post->user_id
            || $user->level == User::ADMIN_LEVEL && $post->exists;
    }

    public function deleteAny(User $user)
    {
        return $user->level >= User::AUTHOR_LEVEL;
    }

}
