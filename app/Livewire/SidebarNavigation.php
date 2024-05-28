<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class SidebarNavigation extends Component
{
    public function render()
    {
        $userRole = Auth::check() ? Auth::user()->role : null;

        return view('livewire.sidebar-navigation', [
            'isTeacher' => $userRole === 'teacher',
            'isStudent' => $userRole === 'student',
            'isAdmin' => $userRole === 'admin'
        ]);
    }
}