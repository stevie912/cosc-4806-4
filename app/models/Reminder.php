<?php

class Reminder {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {

    }

    public function get_all_reminders () {
      $db = db_connect();
      $statement = $db->prepare("select * from reminders;");
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

   public function create_reminder ($subject) {
      $db = db_connect();
      $statement = $db->prepare("insert into reminders (subject) values (:subject);");
      $statement->bindValue(':subject', $subject);
      $statement->execute();
      // header("Location: /home");
   }

    public function update_reminder ($reminder_id) {
      $db = db_connect();
      //todo  update reminder
    }

}
?>