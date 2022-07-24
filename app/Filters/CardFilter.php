<?php


namespace App\Filters;


use App\Models\Card;

class CardFilter extends QueryFilter
{
    public function category($category = 'all')
    {
        if ($category != 'all') {
            /*return $this->builder->when($category, function ($query) use ($category){
                $query->where('category', $category);
            });*/
            return $this->builder->where('category', $category);
        } else return Card::all();
    }

    public function search($search = '')
    {
        return $this->builder->when($search, function ($query) use ($search){
           $query->where('name', 'LIKE', '%' . $search . '%')
               ->orWhere('transcription', 'LIKE', '%' . $search . '%');
        });
        /*if ($search) {
            return $this->builder->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('transcription', 'LIKE', '%' . $search . '%');
        }*/
    }
}
