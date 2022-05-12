<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Page title -->
        <title><?php echo $this->title; ?></title>
        <!-- Metadata -->
        <meta name="Description" content="<?php echo $this->metacontent; ?>" />
        <meta name="Keywords" content="<?php echo $this->metakeywords; ?>" />

        
        <!-- Stylesheets -->
        <link href="stylesheets/default.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <!-- Begin body -->
    <body>
        <center>
            <div id="header">
                <h1>Crime Watch</h1>
            </div>
            <!--Nav -->
            <div id="head">
                <a href="index.php?mod=home">Home</a>
                <a href="index.php?mod=add_posts">Add Post</a>
                <a href="index.php?mod=posts">Posts</a>
                <a href="index.php?mod=join">Sign up</a>
                <a href="index.php?mod=login">Sign in</a>
            </div>

            <!-- Main section -->
            <div id='main'>
                <h1><?php echo $this->heading; ?></h1>
                <div id='content'><?php echo $this->content; ?></div>
            </div>

            <!-- Footer -->
            <div id="top-footer">
                <ul>
                    <li><a href="index.php?mod=home">Home</a></li>
                    <li><a href="index.php?mod=add_posts">Add Post</a></li>
                    <li><a href="index.php?mod=posts">Posts</a></li>
                    <li><a href="index.php?mod=join">Join</a></li>
                    <li><a href="index.php?mod=login">Login</a></li>
                </ul>
            </div>
            <div id="bottom-footer">
                <p>&#169 2022 JEW. All rights reserved.</p>
            </div>
        </center>
    </body>
    <!-- End body -->
</html>