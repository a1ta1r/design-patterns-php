<?php


namespace DesignPatterns\Creational\FactoryMethod;


class LowercaseFormatter implements FormatterInterface
{
    public function format(string $message): string
    {
        return strtolower($message);
    }
}