<?php

namespace Transnatal\Services\NewsService\Observers;

use Transnatal\Services\NewsService\Observers\ObserverInterface;
use Mail;

class SMTPObserver implements ObserverInterface {

	public function handle($news)
	{
		if (!empty($news->news_message)) {
			Mail::send("emails.auth.reminder", array('news' => $news), function($message) {
				$message->to('rfqueiroz.91@gmail.com')->subject("Noticia transnatal");
			});
			if (count(Mail::failures()) > 0) {
				return false;
			} else {
				return true;
			}
		} else {
			return false;
		}
	}
}