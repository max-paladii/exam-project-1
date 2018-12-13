<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to Yadda Yadda Yadda</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,700">
</head>
<body>
<header>
    <div class="welcome">
        <div class="title">Welcome to Y3</div>
        <div class="user">$<?php if (!empty($username)) {
                echo $username;
            } ?></div>
    </div>
    <form>
    <button style="top: -20px; position: relative;" formaction="auth/logout">Logout</button>
    </form>
</header>
<nav>
    <ul>
        <li class="nav">
            <a class="active" href="<?= $_SERVER['HTTP_REFERER'];?>">News</a>
        </li>
        <li class="nav">
            <a href="status/followees">Friends</a>
        </li>
        <li class="nav">
            <a href="#">Interests</a>
        </li>
        <li class="nav">
            <a href="auth/edit">My Profile</a>
        </li>
        <li class="nav">
            <a href="admin">Admin page</a>
        </li>
    </ul>
</nav>
<div class="add_status">
    <form action="status/add" method="post" enctype="multipart/form-data">
        <label class="userdata">Let’s write new yadda:
            <br/>
        </label>
        <textarea rows="6" cols="85" name="statusText" class="input_res" placeholder="Write something you want :)">
</textarea>
        <?php if (isset($error_too_long)) { ?>
            <div style="color: red;">Error: Text is too long</div>
        <?php } ?>
        <br/>
        <input type="file" name="statusImage" value="Add image"/>
        <div class="sbuttons">
            <input type="submit" value="Add Tag"/>
            <input type="submit" value="Add Status"/>
        </div>
    </form>
</div>
<main>
    <?php foreach(array_reverse($statuses) as $status) { ?>
    <div class="status">
        <div class="s_top-index">
            <div class="post">$<?php echo $status['user_nickname'];?></div>
            <div class="time"><?php echo $status['created_at'];?></div>
        </div>

            <div class="scontent">
                <?php if (!empty($status['image'])) { ?>
                <img class="picture" src="images/<?php echo $status['image'];?>">
                <?php } ?>
                <div class="stext"><?php echo $status['status_text'];?></div>
            </div>

        <div class="s_bottom_index">
            <a class="post" href="#">tag1</a>
        </div>
    </div>
    <?php } ?>
</main>
<footer>
    <p>© 2018. Yadda Yadda Yadda </p>
</footer>
<div class="grey_bg"></div>
<div class="wh_bg"></div>
</body>
</html>