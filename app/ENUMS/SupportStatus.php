<?php

namespace App\Enums;

enum SupportStatus: string
{
    case A = 'Aberto';
    case C = 'Fechado';
    case P = 'Pendente';

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status) {
            if ($name === $status->name) {
                return $status->value;
            }
        }

        throw new \ValueError("Status informado não é válido.");
    }
}
