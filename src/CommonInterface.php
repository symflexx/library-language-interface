<?php

namespace Symflex\Library\LanguageInterface;

/**
 * Interface CommonInterface
 * @package Symflex\Library\LanguageInterface
 */
interface CommonInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getLocale(): string;
}
