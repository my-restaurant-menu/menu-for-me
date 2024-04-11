<?php

namespace App\Enums;

enum CategoryEnum: int
{
    case HOT_DRINKS = 1;
    case COLD_DRINKS = 2;
    case ALCOHOLIC_DRINKS = 3;
    case HOT_BREAKFAST = 4;
    case FISH = 5;
    case GARNISH = 6;
    case BAKED = 7;
    case SAUCES = 8;
    case SOUP = 9;
    case HOT_DISHES_WITH_GARNISH = 10;
    case SALADS = 11;
}
