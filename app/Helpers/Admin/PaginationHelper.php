<?php

namespace App\Helpers\Admin;

use Illuminate\Http\Request;

class PaginationHelper
{
    /**
     * Genera el nombre del parámetro de página para un contexto dado.
     */
    public static function pageName(?string $context = null): string
    {
        return $context ? "page_{$context}" : 'page';
    }

    /**
     * Genera el nombre del parámetro de cantidad por página para un contexto dado.
     */
    public static function perPageName(?string $context = null): string
    {
        return $context ? "per_page_{$context}" : 'per_page';
    }

    /**
     * Obtiene la cantidad de registros por página desde el request o usa el valor por defecto.
     */
    public static function perPage(?string $context = null): int
    {
        $request = request();

        $default = self::defaultPerPage();

        $value = $request->integer(
            self::perPageName($context),
            $default
        );

        if (! in_array($value, self::availableSizes())) {
            return $default;
        }

        return $value;
    }

    // public static function perPage(?Request $request = null): int
    // {
    //     $default = config('pagination.default', 10);

    //     $request = $request ?: request();

    //     $value = $request->input('per_page', $default);

    //     // Asegurar que sea un valor válido permitido
    //     $allowed = config('pagination.sizes', []);

    //     if (! in_array((int) $value, $allowed)) {
    //         $value = $default;
    //     }

    //     return (int) $value;
    // }

    /**
     * Devuelve los tamaños de paginación disponibles.
     */
    public static function availableSizes(): array
    {
        return config('pagination.sizes', []);
    }

    /**
     * Devuelve el tamaño de paginación por defecto.
     */
    public static function defaultPerPage(): int
    {
        return config('pagination.default', 10);
    }
}
