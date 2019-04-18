<?php


namespace DesignPatterns\Creational\FactoryMethod;


interface FormatterInterface
{
    public function format(string $message): string;
}