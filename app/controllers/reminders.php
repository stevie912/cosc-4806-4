<?php

class Reminders extends Controller {

  public function index() {
    $reminder = $this->model('Reminder');
    $reminders_list = $reminder->get_all_reminders();
    print_r($reminders_list);
    die;
    $this->view('reminders/index');
  }
}
?>