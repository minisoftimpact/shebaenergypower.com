<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MasterLayout extends Component
{
    public string $title;
    public string $metaDescription;
    public string $metaKeywords;
    public string $metaAuthor;
    public string $metaImage;

    public function __construct(
        string $title = "Sheba Energy Power",
        string $metaDescription = "Sheba Energy Power is an energy and power solutions company in Bangladesh.",
        string $metaKeywords = "Sheba Energy Power, Generators, Ricardo, Deutz, Hyundai, Honda, Perkins, Cummings, Price in Bangladesh, Price in BD",
        string $metaAuthor = "Sheba Energy Power",
        string $metaImage = "/images/logo.png"
    ) {
        $this->title = $title;
        $this->metaDescription = $metaDescription;
        $this->metaKeywords = $metaKeywords;
        $this->metaAuthor = $metaAuthor;
        $this->metaImage = url($metaImage);
    }

    public function render(): View
    {
        return view('layouts.master');
    }
}
