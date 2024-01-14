# composer create-project --prefer-dist laravel/laravel laravel-trabajo

Este comando se utiliza para crear un proyecto de laravel

# php artisan make:factory AlumnoFactory

Este comando se utiliza para crear un factory (Para crear con fake los campos de las tablas)

# php artisan make:model Alumno


Este comando se utiliza para crear el model(Define la estructura y el comportamiento del objeto) 
    

# php artisan make:migration create_alumnos_table

Este comando se utiliza para crear el migration (Se utiliza para crear la tabla y decirle como tiene que ser sus campos)
    1.php artisan migrate(Añadir la tabla a la base de datos).

    2.php artisan migrate:rollback --step=1 (Elimina la migracion mas reciente que hayas creado, el step indica cuantas migraciones quieres eliminar).

# php artisan make:seeder AlumnoSeeder

Este comando se utiliza para crear el seeder(Para indicarle cuantos campos quiero crear)

1. php artisan db:seed (inizializar el sedder)

# php artisan serve

Activar el servidor de larave een el puerto 8000

# php artisan make:middleware ValidateId

crear el middleware ValidateID(se utiliza para que antes de que se realize la peticion puedas añadir alguna funcion de bloqueo que si no cumple esa funcion no le deja pasar)

# php artisan make:controller AlumnoController

Se utiliza para crear el controller(Se utiliza para poder ver/modificar/eliminar tu base de datos)

-fake() -> Este método se utiliza en Laravel para generar datos ficticios o de prueba

-nullable() -> Este método se utiliza en las migraciones de Laravel para permitir que un campo en la base de datos acepte valores nulos.

-unique() ->El valor en esa columna debe ser único para cada fila en la tabla

-$table->timestamps() -> Este método crea dos columnas en una tabla de base de datos, created_at y updated_at. La columna created_at registra la fecha y hora en que se creó una fila, mientras que updated_at registra la fecha y hora en que se actualizó por última vez esa fila.
