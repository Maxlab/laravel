<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => $password ? : $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

///** @var \Illuminate\Database\Eloquent\Factory $factory */
//$factory->define(\App\Models\Gallery::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->realText(150),
//        'user_id' => factory(\App\Models\User::class)->create()->id
//    ];
//});
//
///**
// * Factory definition for model Photo.
// */
//$factory->define(\App\Models\Photo::class, function (Faker\Generator $faker) {
//    return [
//        'name' => $faker->words(random_int(5, 10), true),
//        'image' => $faker->imageUrl(200,200,'cats'),
//    ];
//});
//
///**
// * Factory definition for model GalleryPhoto.
// */
//$factory->define(\App\Models\GalleryPhoto::class, function (Faker\Generator $faker) {
//    return [
//        'gallery_id' => factory(\App\Models\Gallery::class)->create()->id,
//        'photo_id' => factory(\App\Models\Photo::class)->create()->id,
//    ];
//});
