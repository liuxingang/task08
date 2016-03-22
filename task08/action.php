<?php
//连接数据库
header("content-type:text/html; charset=utf-8");
require_once('config.php');
$con = mysqli_connect(HOST, USERNAME, PASSWORD);
if (!$con) {
    die('数据库连接失败' . mysqli_error($con));
}
mysqli_query($con, 'set names utf8');
mysqli_select_db($con, 'phplesson');
//通过action的值做相应操作
$action = $_GET['action'];
echo $action;
switch ($action) {
    //增加操作
    case "add";
        $newstitle = $_GET["newstitle"];
        $newsimg = $_GET["newsimg"];
        $newscontent = $_GET['newscontent'];
        $addtime = $_GET['addtime'];
        $lanmu = $_GET['lanmu'];
        $sql = "INSERT INTO `news`(`newstitle`, `newsimg`, `newscontent`, `addtime`,`lanmu`) VALUES ('$newstitle','$newsimg','$newscontent','$addtime','$lanmu')";
        //执行
        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "<script>alert('添加失败');window.history.back();</script>";

        } else {
            echo "<script>alert('添加成功');window.location='manger.html'</script>";
        }
        break;
    //删除操作
    case "del";
        $id = $_GET['id'];
        $sql = "delete from news where newsid={$id }";//删除
        mysqli_query($con, $sql);//执行
        header("location:manger.html");
        break;
    //修改操作
    case 'edit';
        $newstitle = $_GET["newstitle"];
        $newsimg = $_GET["newsimg"];
        $newscontent = $_GET['newscontent'];
        $addtime = $_GET['addtime'];
        $newsid = $_GET['id'];
        $sql = "update news set  newstitle='{$newstitle}',newsimg='{$newsimg}',newscontent='{$newscontent}',addtime='{$addtime}'where newsid={$newsid}";
        $result = mysqli_query($con, $sql);
        if (!$result) {
            echo "<script>alert('修改失败');window.history.back();</script>";

        } else {
            echo "<script>alert('修改成功');window.location='manger.html'</script>";
        }
        break;
}