<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome to Yadda Yadda Yadda</title>
    <link href="../css/style.css" rel="stylesheet">
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
        <button style="top: -20px; position: relative;" formaction="../auth/logout">Logout</button>
    </form>
</header>
<nav>
    <ul>
        <li class="nav">
            <a href="..">News</a>
        </li>
        <li class="nav">
            <a class="active" href="followees">Friends</a>
        </li>
        <li class="nav">
            <a href="#">Interests</a>
        </li>
        <li class="nav">
            <a href="../auth/edit">My Profile</a>
        </li>
        <li class="nav">
            <a href="../admin">Admin page</a>
        </li>
    </ul>
</nav>
<body>
<main>
                <div class="text-block">
                <div class="title">Follow user</div>
                <div class="text">Search for user to follow then press follow button.</div>
                <div class="search">
                    <form action="../status/follow" method="post">
                        <input type="text" name="username" value="Username to follow" placeholder="Enter user's name or surname" />
                        <?php if (isset($error_user_not_found)) { ?>
                            <div style="color: red;">Error: Username was not found</div>
                        <?php } ?>
                        <button class="search">Follow</button>
                    </form>
                </div>
            </div>
    <div class="text-block">
        <div class="title">Follow user</div>
        <div class="text">Search for user to follow then press follow button.</div>
    </div>

    <?php foreach ($followees as $followee) { ?>
    <div class="user_follow">
        <div class="s_top">
            <form action="../status/followees" method="post">
                <div class="post"><?php echo $followee['user_nickname'];?></div>
                <input type="hidden" name="user_id" value="<?php echo $followee['id'];?>" />
                <button>Unfollow</button>
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



	

