<?php

namespace App\Service;

final class InputSanitizer
{
    public function escape(string $input): string
    {
        return htmlspecialchars($input);
    }

    public function isStrongPassword(string $password): bool
    {
        return strlen($password) >= 8;
    }

    /**
     * @return non-empty-string
     */
    public function sanitizeProductName(string $rawName): string
    {
        $clean = trim(strip_tags($rawName));

        if ('' === $clean) {
            throw new \InvalidArgumentException('Le nom du produit ne peut pas être vide.');
        }

        return $clean;
    }
}
