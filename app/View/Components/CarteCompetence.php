<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarteCompetence extends Component
{
    public function __construct(
        public string $slug,
        public string $nom,
        public string $niveau,
        public ?string $description = null,
        public ?int $numero = null
    ) {
    }

    public function couleurBadge(): string
    {
        return match ($this->niveau) {
            'Avancé' => 'bg-success',
            'Intermédiaire' => 'bg-warning text-dark',
            'Débutant' => 'bg-secondary',
            default => 'bg-primary',
        };
    }

    public function render(): View|Closure|string
    {
        return view('components.carte-competence');
    }
}
