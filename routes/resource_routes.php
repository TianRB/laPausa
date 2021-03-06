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
    'cat_herr_maq' => 'CatalogoHerramientaMaquinariaController',
    'herr_maq' => 'HerramientaMaquinariaController',
    'registro_combustible' => 'RegistroCombustibleController',
    'mantenimiento_y_reparaciones' => 'MantenimientoReparacionController',
    'trabajadores' => 'TrabajadorController',
    'catalogo_materiales' => 'CatalogoMaterialController',
    'inventario_materiales' => 'InventarioMaterialController',
    'registro_materiales' => 'RegistroMaterialController',
    'catalogo_insumos' => 'CatalogoInsumosController',
    'provision_insumos' => 'ProvisionInsumoController',
    'registro_procedimientos' => 'RegistroProcedimientoController',
    'tipos_precio' => 'TipoPrecioController',
    'planes' => 'PlanController',
    'cultivo_planes' => 'CultivoPlanController',
    'siembra_hongos' => 'SiembraHongoController',
    'siembra_germinados' => 'SiembraGerminadoController',
  ]);
});