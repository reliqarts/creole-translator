<?php

declare(strict_types=1);

namespace ReliqArts\CreoleTranslator\Tests\Unit\Services;

use PHPUnit\Framework\TestCase;
use ReliqArts\CreoleTranslator\Core\Contracts\Translator as TranslatorContract;
use ReliqArts\CreoleTranslator\Core\Services\Translator;

/**
 * @internal
 * @coversNothing
 */
final class TranslatorTest extends TestCase
{
    /**
     * @var TranslatorContract
     */
    private $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = new Translator();
    }

    /**
     * @dataProvider translateDataProvider
     *
     * @param string $text
     * @param string $expectedResult
     */
    public function testTranslate(string $text, string $expectedResult): void
    {
        $this->markTestSkipped('Early days yet...');

        $result = $this->subject->translate($text);

        $this->assertSame($expectedResult, $result);
    }

    /**
     * @return array
     */
    public function translateDataProvider(): array
    {
        return [
            [
                'Hello! What\'s up?',
                'Yow! Wha gwaan?',
            ],
            [
                'I\'m going down the road.',
                'Mi a go dung di road.',
            ],
        ];
    }
}
