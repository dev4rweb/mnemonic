<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'name',
        'transcription',
        'image',
        'add_image'
    ];

    protected $appends = [
        'category_name'
    ];

    public function getCategoryNameAttribute()
    {
        switch ($this->category) {
            case 'week_days' : return 'Дни недели';
            case 'transcription' : return 'Транскрипция';
            case 'alphabet' : return 'Алфавит рус';
            case 'alphabet_en' : return 'Алфавит англ';
            case 'months' : return 'месяцы';
            case 'hundred' : return '100';
            case 'carts' : return 'игральные карты';
            case 'thousand' : return '1000';
            default: return 'Неизвестная категория';
        }
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter)
    {
        return $filter->apply($builder);
    }
}
