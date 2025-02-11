
#Proyecto Blog con Laravel y Bootstrap

Pequeño blog hecho con Laravel 11 y usando clases de Bootstrap.css para el estilo de las vistas.

## Crear usuarios

```bash
  php artisan db:seed RoleSeeder
  php artisan tinker \App\Models\User::factory(10)->create();
```