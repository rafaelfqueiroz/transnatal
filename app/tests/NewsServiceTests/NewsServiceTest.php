<?php

use Transnatal\Services\NewsService\Observers\ObserverInterface;
use Transnatal\Services\NewsService\Observers\SMTPObserver;
use Mockery;
use News;

class NewsServiceTest extends TestCase {

	public function testMailFacede()
	{
		Mail::shouldReceive('send')->once()->with('emails.auth.reminder', Mockery::on(function($data) {
			$this->assertContains('news', $data);
			return true;
		}), Mockery::on(function($message) {
			$message = m::mock('Illuminate\Mailer\Message');
        	$message->shouldReceive('to')->with('rfqueiroz.91@gmail.com')->andReturn(m::self());
        	$message->shouldReceive('subject')->with('Email subject')->andReturn(m::self());
        	$closure($message);
        	return true;
		}));
	}

	public function testSMTPObserver() {
		$news = new News();
		$news->news_date = "15/11/1991";
		$news->news_message = "Mensagem de teste";
		$smtpObserver = new SMTPObserver();
		$this->assertTrue($smtpObserver->handle($news));
	}
}