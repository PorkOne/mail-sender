<?php

class AddMailTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setHost('127.0.0.1');
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://mail-sender.dev');
    }

    public function setUpPage()
    {
        $this->url('/mail_sender.php?page=add_mail');

        $passwordField = $this->byId('pass');
        $passwordField->value('admin');

        $this->byId('OK')->click();
    }

    /**
     * @test
     */
    public function addMail()
    {
        $this->url('/mail_sender.php?page=add_mail');

        $button = $this->byName('add_mail');

        $button->click();

        $this->assertContains('Niepoprawne mail!', $this->source());
    }
}
