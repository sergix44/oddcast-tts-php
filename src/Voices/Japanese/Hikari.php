<?php


namespace SergiX44\OddcastTTS\Voices\Japanese;


use SergiX44\OddcastTTS\Voices\Voice;

class Hikari implements Voice
{

    public function getID(): int
    {
        return 5;
    }

    public function getLanguageID(): int
    {
        return 12;
    }

    public function getLanguageName(): string
    {
        return 'Japanese';
    }

    public function getName(): string
    {
        return 'Hikari';
    }

    public function getGender(): string
    {
        return 'F';
    }

    public function getEngine(): int
    {
        return 3;
    }
}