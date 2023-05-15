<?php

declare(strict_types=1);

namespace SvenPetersen\UX\Svelte\ViewHelpers;

use Ssch\Typo3Encore\ViewHelpers\Stimulus\AbstractViewHelper;

class ComponentViewHelper extends AbstractViewHelper
{
    protected $escapeOutput = false;

    public function initializeArguments(): void
    {
        $this->registerArgument('name', 'string', 'Name of the Svelte component to render', true);
        $this->registerArgument('props', 'array', 'Props to be passed to the component');
    }

    public function render(): string
    {
        $params = ['component' => $this->arguments['name']];

        if ($this->arguments['props']) {
            $params['props'] = $this->arguments['props'];
        }

        return $this->renderStimulusController('@symfony/ux-svelte/svelte', $params)->__toString();
    }
}
