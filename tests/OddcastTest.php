<?php


use PHPUnit\Framework\TestCase;

class OddcastTest extends TestCase
{

    /**
     * @test
     */
    public function it_has_a_default_voice()
    {
        $i = new \SergiX44\OddcastTTS\Oddcast();

        $this->assertInstanceOf(\SergiX44\OddcastTTS\Voices\English\Julie_US::class, $i->getVoice());
    }

    /**
     * @test
     */
    public function it_has_a_default_text()
    {
        $i = new \SergiX44\OddcastTTS\Oddcast();

        $this->assertSame('Hello!', $i->getText());
    }

    /**
     * @test
     */
    public function it_generate_the_url()
    {
        $i = new \SergiX44\OddcastTTS\Oddcast();

        $this->assertTrue(filter_var($i->getUrl(), FILTER_VALIDATE_URL) !== FALSE);
    }

    /**
     * @test
     */
    public function it_can_download_the_audio()
    {
        $i = new \SergiX44\OddcastTTS\Oddcast();

        $this->assertTrue($i->getAudio() !== FALSE);
    }

    /**
     * @test
     */
    public function it_can_save_the_file()
    {
        $i = new \SergiX44\OddcastTTS\Oddcast();

        $i->save(__DIR__.'/../test.mp3');

        $this->assertFileExists(__DIR__.'/../test.mp3');

        unlink(__DIR__.'/../test.mp3');
    }

    /**
     * @test
     */
    public function can_change_the_voice()
    {
        $i = new \SergiX44\OddcastTTS\Oddcast();

        $i->setVoice(\SergiX44\OddcastTTS\Voices\Italian\Raffaele::class);

        $this->assertInstanceOf(\SergiX44\OddcastTTS\Voices\Italian\Raffaele::class, $i->getVoice());
    }

    /**
     * @test
     */
    public function it_works_with_custom_text() {
        $i = new \SergiX44\OddcastTTS\Oddcast();

        $i->setText('World!');

        $this->assertSame('World!', $i->getText());
        $this->assertNotEmpty($i->getAudio());
    }

}