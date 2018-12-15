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
        <div class="user">$<?php if (!empty($_SESSION['nickname'])) {
                echo $_SESSION['nickname'];
            } ?></div>
    </div>
    <form>
        <button style="top: -20px; position: relative;" formaction="auth/logout">Logout</button>
    </form>
</header>
<nav>
    <ul>
        <li class="nav">
            <a href="../myproject">News</a>
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
            <a class="active" href="admin">Admin page</a>
        </li>
    </ul>
</nav>
<body>
<main>
    <div class="text-block">
        <div class="title">Manage users</div>
        <div class="text">There is a list of all users. In case you block user, he/she cant login and use the system.</div>
    </div>

    <?php foreach ($users as $user) { ?>
        <div class="user_follow">
            <div class="s_top">
                <form action="admin" method="post">
                    <div class="post"><?php echo $user['user_nickname'];?></div>
                    <input type="hidden" name="user_id" value="<?php echo $user['id'];?>" />
                    <button>Delete</button>
                </form>
            </div>
        </div>
    <?php } ?>
</main>
<footer>
    <p>© 2018. Yadda Yadda Yadda </p>
</footer>
<div class="wh_bg"></div>
</body>
</html>





