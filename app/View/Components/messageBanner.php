<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MessageBanner extends Component
{
    public $msg;
    public $type; // Added to differentiate between success and failure

    /**
     * Create a new component instance.
     */
    public function __construct($msg, $type = 'success')
    {
        $this->msg = $msg;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-banner', [
            'style' => $this->getStyle(),
        ]);
    }

    /**
     * Get the style based on the type.
     */
    private function getStyle(): string
    {
        if ($this->type === 'failed') {
            return 'background: red; color: white; padding: 3px 10px; border-radius: 5px; display: inline-block; margin: 10px;';
        }

        if ($this->type === 'warning') {
            return 'background: orange; color: white; padding: 3px 10px; border-radius: 5px; display: inline-block; margin: 10px;';
        }

        // Default to success style
        return 'background: lightgreen; color: green; padding: 3px 10px; border-radius: 5px; display: inline-block; margin: 10px;';
    }
}