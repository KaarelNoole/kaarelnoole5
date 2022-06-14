<?php

namespace App\View\Components;

use App\Models\User;
use Illuminate\View\Component;

class AuthorsDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     */
    public function render()
    {
        $params = [
            'authors' => User::all(),
            'currentAuthor' => User::firstWhere('username',request('author'))
        ];
        return view('components.author-dropdown',$params);
    }
}
