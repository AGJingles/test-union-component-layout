<?php

namespace App\Nova\Flexible\Layouts;

use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class Paragraph extends Layout
{
    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'paragraph';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Paragraph';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Trix::make('Text')
        ];
    }

}
