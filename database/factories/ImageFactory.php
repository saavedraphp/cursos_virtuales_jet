<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Image::class;

    public function definition()
    {
        // true => public/storage/cursos/imagen.jpg , 
        // false => imagen.jpg
        // =>lo que nosotros necesitamos es cursos/image.jpg
        return [
            'url' => 'cursos/'.$this->faker->image('public/storage/cursos',640,480,null,false),
            
        ];
    }
}
