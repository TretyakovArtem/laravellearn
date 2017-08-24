<?php

namespace App\Policies;

use App\Article;
use Illuminate\Auth\Access\HandlesAuthorization;

use App\User;


class ArticlePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function add(User $user) {
        foreach ($user->roles as $role) {
            if ($role->name == 'Admin') {
                return TRUE;//FALSE
            }
        }
        return FALSE;
    }

    public function update(User $user, Article $article) {
        foreach ($user->roles as $role) {
            if($role->name == 'Admin') {
                if($user->id ==$article->user_id) {
                    return TRUE;
                }
            }
        }

        return FALSE;
    }
}
