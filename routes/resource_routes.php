<?php

/*
|--------------------------------------------------------------------------
| Resource Routes
|--------------------------------------------------------------------------
|
| Rutas para recursos de la aplicación
|
*/

Route::prefix('admin')->group(function () {
  Route::resources([
    'tipos_cultivo' => 'TipoCultivoController',
    'familias' => 'FamiliaController',
    'tipos_cosecha' => 'TipoCosechaController',
    'tipos_siembra' => 'TipoSiembraController',
    'proveedores' => 'ProveedorController',
    'enfermedades_y_plagas' => 'EnfermedadPlagaController',
    'areas' => 'AreaController',
    'biocamas' => 'BiocamaController',
    'grupos' => 'GrupoController',
    'cultivos' => 'CultivoController',
    'catalogo_animales' => 'CatalogoAnimalController',
    'animales' => 'AnimalController',
  ]);
});