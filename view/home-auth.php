<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Yadda</title>
</head>
<body>

Welcome, $<?php echo $username;?>

<form action="status/add" method="post">
    <textarea name="statusText"></textarea>
    <?php if (isset($error_too_long)) { ?>
        <div style="color: red;">Error: Text is too long</div>
    <?php } ?>
    <input type="submit" value="Add Status" />
</form>

<?php foreach($statuses as $status) { ?>
    <div>
        <?php echo $status['status_text'];?>
    </div>
<?php } ?>
</body>
</html>