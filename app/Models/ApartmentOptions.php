<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ApartmentOptions
 *
 * @property int $id
 * @property int $apartment_id
 * @property string $name
 * @property string $cost
 * @property string $type
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions query()
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions whereApartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ApartmentOptions whereType($value)
 * @mixin \Eloquent
 */
class ApartmentOptions extends Model
{
    use HasFactory;
    protected $table= "apartments_options";
}
