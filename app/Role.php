<?php

namespace Myths;

use Zizaco\Entrust\EntrustRole;
use Zizaco\Entrust\Traits\EntrustRoleTrait;

class Role extends EntrustRole
{
    use EntrustRoleTrait;

    public function user()
    {
        return $this->belongsToMany(User::class);
    }


}
