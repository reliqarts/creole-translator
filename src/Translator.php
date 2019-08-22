<?php

declare(strict_types=1);

namespace ReliqArts\CreoleTranslator;

interface Translator
{
    /**
     * @param string $text
     * @param string $vocabularyKey
     *
     * @return string
     */
    public function translate(string $text, string $vocabularyKey): string;
}
