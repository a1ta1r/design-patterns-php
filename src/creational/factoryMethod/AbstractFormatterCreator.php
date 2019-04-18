<?php


namespace DesignPatterns\Creational\FactoryMethod;


abstract class AbstractFormatterCreator
{
    abstract public function createFormatter(): FormatterInterface;
}