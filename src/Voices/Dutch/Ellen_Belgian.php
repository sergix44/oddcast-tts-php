<?php


namespace SergiX44\OddcastTTS\Voices\Dutch;


use SergiX44\OddcastTTS\Voices\Voice;

class Ellen_Belgian implements Voice
{

    public function getID(): int
    {
        return 1;
    }

    public function getLanguageID(): int
    {
        return 11;
    }

    public function getLanguageName(): string
    {
        return 'Dutch';
    }

    public function getName(): string
    {
        return 'Ellen_Belgian';
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