<?php

namespace LibraSys\Infrastructure\EloquentModel;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * LibraSys\Infrastructure\EloquentModel\BookRentalHistory
 *
 * @property int $id
 * @property int $user_id
 * @property int $book_id
 * @property string $reason
 * @property \Carbon\CarbonImmutable $rental_date
 * @property string $return_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \LibraSys\Infrastructure\EloquentModel\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereBookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereRentalDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereReturnDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BookRentalHistory whereUserId($value)
 * @mixin \Eloquent
 */
class BookRentalHistory extends BaseModel
{
    protected $casts = [
        "rental_date" => "immutable_datetime"
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
