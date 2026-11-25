<?php


namespace App\Enum;

use App\Enum\Traits\HasLabel;
use App\Enum\Traits\HasValue;

enum RoleEnum: string {

    use HasLabel;
    use HasValue;

    case ADMIN = 'admin';
    case KITCHEN_STAFF = 'kitchen_staff';
    case SERVER = 'server';
    //will add more

}