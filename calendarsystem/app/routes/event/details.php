<?php

$app->get('/event-details-:number', $authinticated(),function ($number) use ($app) {
  $event = $app->event->where('id', $number)->first();
  if (!$event) {
    $app->notFound();
  }

  $app->render('event/details.php', [
    'event' => $event
    ]);

})->name('event.details');


$app->post('/events-details', $authinticated(), function() use($app) {
	//Ignore the URL, just update title and date of issue
	$request = $app->request;
  $id = $request->post('id');
	$title = $request->post('title');
  $datetime = $request->post('datetime');
  $datetime_end = $request->post('datetime');
  $status = $request->post('status');
	$valid = $app->validation;

	$valid->validate([

	]);

  $event = $app->event->where('id', $id)->update([
      'title' => $title,
      'datetime' => $datetime,
      'datetime_end' => $datetime_end,
    ]);
$app->response->redirect($app->urlFor('event.manage'));

})->name('event.details.post');
