<?php


namespace SergiX44\OddcastTTS\Voices\Danish;


use SergiX44\OddcastTTS\Voices\Voice;

class Frida implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 19;
    }

    public function getLanguageName(): string
    {
        return 'Danish';
    }

    public function getName(): string
    {
        return 'Frida';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 2;
    }
}