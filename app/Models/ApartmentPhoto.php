<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ApartmentPhoto
 *
 * @property int $id
 * @property int $apartment_id
 * @property string $description
 * @property string $path
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentPhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentPhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentPhoto query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentPhoto whereApartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentPhoto whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentPhoto whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentPhoto wherePath($value)
 * @mixin \Eloquent
 */
class ApartmentPhoto extends Model
{
    use HasFactory;
    protected $table = "apartments_photos";
}
