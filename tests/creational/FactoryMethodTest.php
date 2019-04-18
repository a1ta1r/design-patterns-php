<?php


namespace Tests\DesignPatterns\Creational;


use Billing\Formatter\FormatterInterface;
use DesignPatterns\Creational\FactoryMethod\AbstractFormatterCreator;
use DesignPatterns\Creational\FactoryMethod\LowercaseFormatter;
use DesignPatterns\Creational\FactoryMethod\LowercaseFormatterCreator;
use DesignPatterns\Creational\FactoryMethod\UppercaseFormatter;
use DesignPatterns\Creational\FactoryMethod\UppercaseFormatterCreator;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testLowercaseFormatter(): void
    {
        /**
         * @var AbstractFormatterCreator
         */
        $formatterCreator = new LowercaseFormatterCreator();
        $formatter = $formatterCreator->createFormatter();

        $testString = 'AbCDEF';
        $expectedString = strtolower($testString);
        $resultString = $formatter->format($testString);

        $this->assertInstanceOf(LowercaseFormatter::class, $formatter);
        $this->assertEquals($expectedString, $resultString);
    }

    public function testUppercaseFormatter(): void
    {
        /**
         * @var AbstractFormatterCreator
         */
        $formatterCreator = new UppercaseFormatterCreator();
        $formatter = $formatterCreator->createFormatter();

        $testString = 'abcdeF';
        $expectedString = strtoupper($testString);
        $resultString = $formatter->format($testString);

        $this->assertInstanceOf(UppercaseFormatter::class, $formatter);
        $this->assertEquals($expectedString, $resultString);
    }
}