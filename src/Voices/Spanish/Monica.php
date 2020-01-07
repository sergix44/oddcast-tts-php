<?php


namespace SergiX44\OddcastTTS\Voices\Spanish;


use SergiX44\OddcastTTS\Voices\Voice;

class Monica implements Voice
{

    public function getID(): int
    {
        return 3;
    }

    public function getLanguageID(): int
    {
        return 2;
    }

    public function getLanguageName(): string
    {
        return 'Spanish';
    }

    public function getName(): string
    {
        return 'Monica';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 4;
    }
}