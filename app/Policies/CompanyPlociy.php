<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPlociy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can view the model.
     *
     * @param \App\User $user
     * @param \App\User $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        return true;
    }


}
