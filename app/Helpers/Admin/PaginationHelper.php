<?php

namespace App\Helpers\Admin;

use Illuminate\Http\Request;

class PaginationHelper
{
    /**
     * Obtiene la cantidad de registros por página desde el request o usa el valor por defecto.
     */
    public static function perPage(?Request $request = null): int
    {
        $param = config('pagination.param_name', 'per_page');
        $default = config('pagination.default', 10);

        $request = $request ?: request();

        $value = $request->input($param, $default);

        // Asegurar que sea un valor válido permitido
        $allowed = config('pagination.sizes', []);
        if (! in_array((int) $value, $allowed)) {
            $value = $default;
        }

        return (int) $value;
    }

    /**
     * Devuelve los tamaños de paginación disponibles.
     */
    public static function availableSizes(): array
    {
        return config('pagination.sizes', []);
    }

    /**
     * Devuelve el nombre del parámetro del request.
     */
    public static function paramName(): string
    {
        return config('pagination.param_name', 'per_page');
    }
}
