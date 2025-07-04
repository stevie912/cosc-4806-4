<?php

class Reminders extends Controller {

  public function index() {
    $reminder = $this->model('Reminder');
    $reminders_list = $reminder->get_all_reminders();
    $this->view('reminders/index', ['reminders_list' => $reminders_list]);
  }

  public function create() {
    $this->view('reminders/create_reminder');
    $reminder = $this->model('Reminder');

  }

  public function create_r() {
    $this->view('reminders/index');
    $subject = $_REQUEST['subject'];
    $reminder = $this->model('Reminder');
    $reminder->create_reminder($subject);
  }
}
?>