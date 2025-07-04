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

  public function update() {
    $reminder_id = $_REQUEST['reminder_id'];
    $this->view('reminders/update_reminder', ['reminder_id' => $reminder_id]);
    $reminder = $this->model('Reminder');
  }

  public function update_r() {
    $this->view('reminders/index/');
    $subject = $_REQUEST['subject'];
    $reminder_id = $_REQUEST['reminder_id'];
    $reminder = $this->model('Reminder');
    $reminder->update_reminder($reminder_id, $subject);
  }

  public function delete() {
    $reminder_id = $_REQUEST['reminder_id'];
    // $this->view('reminders/index', ['reminder_id' => $reminder_id]);
    $reminder = $this->model('Reminder');
    $reminder->delete_reminder($reminder_id);
    header("Location: /reminders");    
    // $reminder = $this->model('Reminder');
    // $reminder->delete_reminder($rid);
    // $this->view('reminders/index/');
  }
  
}
?>