<?php

class DashboardTest extends FunctionalTest
{
    /**
     * @dataProvider siteProvider
     */
    public function testSiteTitle($siteUrl, $expectedTitle)
    {
        $this->url($siteUrl);
        $this->assertEquals($expectedTitle, $this->title());
    }

    public function siteProvider()
    {
        return array(
            array('/mail_sender.php', ':: ABC Mail Sender ::'),
            array('/mail_sender.php?page=start', ':: ABC Mail Sender :: start'),
            array('/mail_sender.php?page=add_mails', ':: ABC Mail Sender :: add_mails'),
            array('/mail_sender.php?page=add_mail', ':: ABC Mail Sender :: add_mail'),
            array('/mail_sender.php?page=show_all   ', ':: ABC Mail Sender :: show_all'),
            array('/mail_sender.php?page=show_yes', ':: ABC Mail Sender :: show_yes'),
            array('/mail_sender.php?page=show_no', ':: ABC Mail Sender :: show_no'),
            array('/mail_sender.php?page=show_no_click', ':: ABC Mail Sender :: show_no_click'),
            array('/mail_sender.php?page=edit_mail_content', ':: ABC Mail Sender :: edit_mail_content'),
            array('/mail_sender.php?page=logout', ':: ABC Mail Sender ::'),
        );
    }
}
