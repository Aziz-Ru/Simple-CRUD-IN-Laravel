## Simple CRUD APP Using Laravel

-   Create Project `composer create-project laravel/laravel myappname`

-   Create Model,Factory, and Seeder `php artisan make:model modelName -mfs`

-   Edit On Migraton Up function

    ```
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('address');
            $table->integer('age');
            $table->integer('class_id');

            $table->timestamps();
        });
    }
    ```

-   Migrate this `php artisan migrate`

-   Now Edit on factory fake() method that globally found on laravel
    ```
    <?php
    ```

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/\*\*

-   @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
    _/
    class StudentFactory extends Factory
    {
    /\*\*
    _ Define the model's default state. \*
    _ @return array<string, mixed>
    _/
    public function definition(): array
    {
    return [
    'name'=>fake()->name(),
    'email'=>fake()->unique()->safeEmail(),
    'phone'=>fake()->unique()->phoneNumber(),
    'address'=>fake()->address(),
    'age'=>fake()->numberBetween(10,25),
    'class_id'=>fake()->numberBetween(1,10)
    ];
    }
    }

    ```

    ```

-   Seed this

````
public function run(): void
   {
       Student::factory()->count(100)->create();
   }
   ```
````

    run this `php artisan db:seed` or you can specifi a class: ` php artisan db:seed --class=StudentSeeder`

## Controller

    - Make Resuourcefull controller `php artisan make:controller --resource --model=ModelName`

## View

-   in resource/view create directory component and there create a file 'layout.blade.php'

-   now create view `php artisamake:view student.create`

### For tailwind css

-   install `npm i` then run vite server `npm run dev`
