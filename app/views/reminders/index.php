<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <br>
            </div>
        </div>
    </div>
    <div class="body-content"> 
        <table class="table table-striped">
            <thead>
                <th>user ID</th>
                <th>Subject</th>
                <th>Date</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($data['reminders_list'] as $reminder) { ?>
                    <tr>
                        <td><?php echo $reminder['user_id']; ?></td>
                        <td><?php echo $reminder['subject']; ?></td>
                        <td><?php echo $reminder['created_at']; ?></td>
                        <td><a href="/reminders/update/"</a>update</td>
                        <td><a href="/reminders/delete/"</a>delete</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <br>
        <p><a href="/reminders/create">Create Reminder</a></p>
    </div>
   
    <?php require_once 'app/views/templates/footer.php' ?>
</div>    