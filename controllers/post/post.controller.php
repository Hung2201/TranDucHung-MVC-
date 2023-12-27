<?php

$heading = "Post Page";

require 'models/post.model.php';

$posts = getPosts();

require "view/post/post.php";