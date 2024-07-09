<?php

namespace App\Enum;

enum Shipping
{
    case Pending;
    case Shipped;
    case Delivered;
}
