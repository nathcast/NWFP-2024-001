<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Publication;

class ListPublications extends Component
{
    public $ref_type;

    public $KeyRef = 'KeyRef';
    public $order = 'ASC';
    public string $searchRef = "";
    public string $searchAuth = "";
    public $guides=1;


    protected $rules = [ ];

    public function render()
    {
        $publications = Publication::where('keywords', 'ilike', '%'. $this->KeyRef .'%')
        ->when($this->guides === 0, fn(Builder $query) => $query->where('keywords', 'not like', '%KeyRefUserGuide%'))
        ->when($this->searchRef !== '', fn(Builder $query) => $query->where('title', 'ilike', '%'. $this->searchRef .'%'))
        ->when($this->searchAuth !== '', fn(Builder $query) => $query->where('authors', 'ilike', '%'. $this->searchAuth .'%'))
        ->get();
        return view('livewire.list-publications', [
            'publications' => $publications
        ]);
    }
}
