<?php

namespace App\Enum;

enum Payment: int
{
    case Declined = 0;
    case Pending = 1;
    case Paid = 2;
}
