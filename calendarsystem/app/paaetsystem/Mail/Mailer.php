<?php

namespace paaetsystem\Mail;

class Mailer
{
	protected $view;
	protected $mailer;

	public function __construct($view, $mailer)
	{
		$this->mailer = $mailer;
		$this->view = $view;
	}

	public function send($template, $data, $callback)
	{
		$message = new Message($this->mailer);

		$this->view->appendData($data);

		$message->body($this->view->render($template));

		call_user_func($callback, $message);

		$this->mailer->send();

		//echo "Message Sent OK";
	}
}
