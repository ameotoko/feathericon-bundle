<?php

/**
 * @author Andrey Vinichenko <andrey.vinichenko@gmail.com>
 */

namespace Ameotoko\FeatherIcon\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FeatherIconExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('feathericon', [$this, 'getIcon'], ['is_safe' => ['html']])
        ];
    }

    public function getIcon(): string
    {
        return 'ICON';
    }
}
