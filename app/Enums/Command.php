<?php

namespace App\Enums;

enum Command: string
{
    // case MANAGE = 'app:manage';
    // case MIGRATE = 'app:migrate';
    // case SEED = 'app:seed';
    // case RESET = 'app:reset';
    // case INSTALL = 'app:install';
    // case UNINSTALL = 'app:uninstall';
    case HELP = 'h';
    case EXIT = 'e';
    case USER = 'u';

    public function label()
    {
        return match ($this) {
            self::HELP => 'Help',
            self::EXIT => 'Exit',
            self::USER => 'User',
            default => 'Unknown',
        };
    }

    public function description()
    {
        return match ($this) {
            self::HELP => 'Display this help message',
            self::EXIT => 'Exit the application',
            self::USER => 'Manage users',
            default => 'Unknown',
        };
    }
}