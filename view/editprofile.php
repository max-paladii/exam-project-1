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
            <a href="../status/followees">Friends</a>
        </li>
        <li class="nav">
            <a href="#">Interests</a>
        </li>
        <li class="nav">
            <a class="active" href="editprofile">My Profile</a>
        </li>
        <li class="nav">
            <a href="../admin">Admin page</a>
        </li>
    </ul>
</nav>
<body>
<main>
    <div class="userpic">
        <img src="https://images.unsplash.com/photo-1503593245033-a040be3f3c82?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ">
        <button class="userpic">Change</button>
    </div>
    <div class="profile-title">Your profile</div>
    <div class="text" style="float: left;">Here you can change or update information in your profile.</div>
    <form action="../auth/edit" method="post">
        <div class="profiledata">
            <label class="userdata">Nickname
                <br/>
            </label>
            <input type="text" name="nickname" value="<?php echo $user['user_nickname']?>" class="profile">
            <label class="userdata">Email
                <br/>
            </label>
            <input type="email" name="email" value="<?php echo $user['user_email']?>" class="profile">
            <br/>
            <button class="userpic2">Update Profile</button>
        </div>
</main>
<footer>
    <p>© 2018. Yadda Yadda Yadda </p>
</footer>
<div class="wh_bg"></div>
</body>
</html>





