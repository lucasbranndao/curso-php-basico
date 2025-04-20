<?php
declare(strict_types=1);

namespace App\Models;

class Product
{
    public static function all(): array
    {
        return [
            [
                'name' => 'XBox',
                'price' => 299.99,
                'is_available' => true,
            ],
            [
                'name' => 'PlayStation',
                'price' => 599.99,
                'is_available' => true,
            ],
            [
                'name' => 'Nintendo Switch',
                'price' => 199.99,
                'is_available' => false,
            ],
        ];
    }
}
?>

