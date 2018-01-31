<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Translation\Bundle\TranslationBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Translation\PlatformAdapter\Loco\Bridge\Symfony\TranslationAdapterLocoBundle::class => ['all' => true],
    Http\HttplugBundle\HttplugBundle::class => ['all' => true],
];
