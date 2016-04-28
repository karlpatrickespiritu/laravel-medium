<?php

namespace App\Repositories;

use App\User;

class ArticleRepository
{
    public function forUser(User $user)
    {
        return $user->articles()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}