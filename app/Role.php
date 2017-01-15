<?php

namespace Myths;

use Zizaco\Entrust\EntrustRole;
use Zizaco\Entrust\Traits\EntrustRoleTrait;

class Role extends EntrustRole
{
    use EntrustRoleTrait;

    protected $fillable = ['name', 'description'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }


}
