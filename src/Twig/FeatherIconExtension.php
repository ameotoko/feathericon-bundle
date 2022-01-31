<?php

/**
 * @author Andrey Vinichenko <andrey.vinichenko@gmail.com>
 */

namespace Ameotoko\FeatherIcon\Twig;

use Feather\Icons;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FeatherIconExtension extends AbstractExtension
{
    private Icons $manager;

    public function __construct()
    {
        $this->manager = new Icons();
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('feathericon', [$this, 'getIcon'], ['is_safe' => ['html']])
        ];
    }

    public function getIcon(string $icon, array $attributes = []): string
    {
        return $this->manager->get($icon, $attributes, false);
    }
}
