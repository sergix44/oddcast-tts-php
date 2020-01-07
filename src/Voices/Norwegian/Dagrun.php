<?php


namespace SergiX44\OddcastTTS\Voices\Norwegian;


use SergiX44\OddcastTTS\Voices\Voice;

class Dagrun implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 20;
    }

    public function getLanguageName(): string
    {
        return 'Norwegian';
    }

    public function getName(): string
    {
        return 'Dagrun';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 7;
    }
}