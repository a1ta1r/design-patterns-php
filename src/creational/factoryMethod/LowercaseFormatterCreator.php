<?php


namespace DesignPatterns\Creational\FactoryMethod;


class LowercaseFormatterCreator extends AbstractFormatterCreator
{
    public function createFormatter(): FormatterInterface
    {
        return new LowercaseFormatter();
    }
}