<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait Followable
{

    public function following(User $user): bool
    {
        return $this->follows()
            ->where('following_user_id', $user->id)
            ->exists();
    }


    public function follows(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id'
        );
    }

    public function toggleFollow(User $user)
    {
        if ($this->following($user)) {
            return $this->unfollow($user);
        }


        return $this->follow($user);
    }

    public function follow(User $user): Model
    {
        return $this->follows()->save($user);
    }

    public function unfollow(User $user): int
    {
        return $this->follows()->detach($user);
    }
}