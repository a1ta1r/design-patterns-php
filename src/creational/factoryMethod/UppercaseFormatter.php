<?php


namespace DesignPatterns\Creational\FactoryMethod;


class UppercaseFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return strtoupper($message);
    }
}