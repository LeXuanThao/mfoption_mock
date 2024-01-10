<?php

namespace App\Commands;

use Symfony\Component\Console\Question\Question;

abstract class BaseCommand implements Command
{
    protected static $instance;

    protected $output;

    public function __construct($output)
    {
        $this->output = $output;
    }

    public static function run($output)
    {
        $instance = static::getInstance($output);
        return $instance->handle();
    }

    public static function getInstance($output)
    {
        return new static($output);
    }

    public function secret(string $question, bool $fallback = true)
    {
        $question = new Question($question);

        $question->setHidden(true)->setHiddenFallback($fallback);

        return $this->output->askQuestion($question);
    }

    abstract public function handle();
}