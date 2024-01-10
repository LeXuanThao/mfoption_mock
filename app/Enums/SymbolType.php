<?php

namespace App\Enums;

enum SymbolType: string
{
    case index = 'index';
    case future = 'future';
    case option = 'option';
}