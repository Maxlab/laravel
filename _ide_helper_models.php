<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Gallery
 *
 * @property int $id
 * @property string $name
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Photo[] $photos
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Gallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Gallery whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Gallery whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Gallery whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Gallery whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Gallery whereUserId($value)
 */
	class Gallery extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gallery[] $galleries
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PasswordReset
 *
 * @property string $email
 * @property string $token
 * @property string $created_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PasswordReset whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PasswordReset whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\PasswordReset whereToken($value)
 */
	class PasswordReset extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Photo
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gallery[] $galleries
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Photo whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Photo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Photo whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Photo whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Photo whereUpdatedAt($value)
 */
	class Photo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\GalleryPhoto
 *
 * @property int $id
 * @property int $gallery_id
 * @property int $photo_id
 * @property-read \App\Models\Gallery $gallery
 * @property-read \App\Models\Photo $photo
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GalleryPhoto whereGalleryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GalleryPhoto whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\GalleryPhoto wherePhotoId($value)
 */
	class GalleryPhoto extends \Eloquent {}
}

