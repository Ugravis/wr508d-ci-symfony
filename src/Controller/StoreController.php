<?php

namespace App\Controller;

use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/store')]
final class StoreController
{
    /**
     * @return array<string, number>
     */
    #[Route('/sales')]
    public function storeSales(): array
    {
        $featured = [
            "lectures" => "douze",
            "likes" => "trois",
        ];

        return $featured;
    }

    private function helperUnused(): string
    {
        return "inutilisée" ;
    }
}