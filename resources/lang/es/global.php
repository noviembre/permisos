<?php

return [

    'user-management' => [
        'title' => 'User Management',
        'created_at' => 'Fecha',
        'fields' => [
        ],
    ],

    'permissions' => [
        'title' => 'Permisos',
        'created_at' => 'Fecha',
        'fields' => [
            'name' => 'Nombre',
        ],
    ],

    'roles' => [
        'title' => 'Roles',
        'created_at' => 'Fecha',
        'fields' => [
            'name' => 'Nombre',
            'permission' => 'Permisos',
        ],
    ],

    'users' => [
        'title' => 'Usuarios',
        'created_at' => 'Time',
        'fields' => [
            'name' => 'Nombre',
            'email' => 'Email',
            'password' => 'Password',
            'roles' => 'Roles',
            'remember-token' => 'Remember token',
        ],
    ],
    'app_create' => 'Crear',
    'app_save' => 'Guardar',
    'app_edit' => 'Editar',
    'app_view' => 'Ver',
    'app_update' => 'Actualizar',
    'app_list' => 'Listar',
    'app_no_entries_in_table' => 'No existen datos en esta tabla',
    'custom_controller_index' => 'Custom controller index.',
    'app_logout' => 'Salir',
    'app_add_new' => 'Crear Nuevo',
    'app_are_you_sure' => 'Estas Seguro?',
    'app_back_to_list' => 'Regresar a la lista',
    'app_dashboard' => 'Dashboard',
    'app_delete' => 'Eliminar',
    'global_title' => 'Roles-Permissions Manager',
];