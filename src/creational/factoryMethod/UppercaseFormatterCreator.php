<?php


namespace DesignPatterns\Creational\FactoryMethod;


class UppercaseFormatterCreator extends AbstractFormatterCreator
{
    public function createFormatter(): FormatterInterface
    {
        return new UppercaseFormatter();
    }
}