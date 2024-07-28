<?php

session_start();

//定义两组数据
$user1 = array('wxh', '13433420745', '030822');
$user2 = array('hxw', '2733785053', '030801');
$user3 = array('狐狸', '2811384410@qq.com', 'foxfox2000');
$user4 = array('1w235', '2776576783@qq.com', '1145141919');

// $user_name = "wxh";
// $user_account = "13433420745";
// $user_password = "030822";

if (isset($_POST['username']) && isset($_POST['account']) && isset($_POST['password'])) {
    // if ($_POST['username'] == $user_name &&
    //     $_POST['account'] == $user_account && $_POST['password'] == $user_password) 
    if (($_POST['username'] == $user1[0] &&
            $_POST['account'] == $user1[1] &&
            $_POST['password'] == $user1[2])
        || ($_POST['username'] == $user2[0] &&
            $_POST['account'] == $user2[1] &&
            $_POST['password'] == $user2[2])
        || ($_POST['username'] == $user3[0] &&
            $_POST['account'] == $user3[1] &&
            $_POST['password'] == $user3[2])
        || ($_POST['username'] == $user4[0] &&
            $_POST['account'] == $user4[1] &&
            $_POST['password'] == $user4[2])
    ) {
        $_SESSION['is_login'] = true;
        $_SESSION['felt'] = false;
        $_SESSION['username'] = $_POST['username'];
        header("Location: index.php");
    } else {

        $_SESSION['is_login'] = false;
        $_SESSION['felt'] = true;
        header("Location: index.php");
    }
} else {
    header("Location: login.php");
}
