<?php


namespace SergiX44\OddcastTTS\Voices\Spanish;


use SergiX44\OddcastTTS\Voices\Voice;

class Paulina_Mexican implements Voice
{

    public function getID(): int
    {
        return 4;
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
        return 'Paulina_Mexican';
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