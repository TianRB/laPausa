<?php

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
|
| Rutas para resources de la aplicación
|
*/

Route::prefix('admin')->group(function () {
  Route::resources([
    'tipos_cultivo' => 'TipoCultivoController',
    'familias' => 'FamiliaController',
    'tipos_cosecha' => 'TipoCosechaController',
    'tipos_siembra' => 'TipoSiembraController',
    'proveedores' => 'ProveedorController',
  ]);
});