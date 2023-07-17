<?php

namespace LibraSys\Infrastructure\EloquentModel;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * LibraSys\Infrastructure\EloquentModel\Book
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \LibraSys\Infrastructure\EloquentModel\BookRentalHistory> $rentalHistories
 * @property-read int|null $rental_histories_count
 * @method static \Illuminate\Database\Eloquent\Builder|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Book whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Book extends BaseModel
{
    public function rentalHistories(): HasMany
    {
        return $this->hasMany(BookRentalHistory::class);
    }
}
