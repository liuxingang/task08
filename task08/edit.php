<html>
<head>
    <title>新闻系统管理</title>
</head>
<body>
<?php
header("content-type:text/html; charset=utf-8");
//include ("menu.php");
//连接数据库
require_once('config.php');
$con = mysqli_connect(HOST, USERNAME, PASSWORD);
if (!$con) {
    die('数据库连接失败' . mysqli_error($con));
}
//取信息
mysqli_query($con, 'set names utf8');
mysqli_select_db($con, 'phplesson');
$sql = "select * from news where newsid=" . $_GET['id'];
$result = mysqli_query($con, $sql);
if (!$result) {
    die("没有修改的数据");

} else {
    $row = mysqli_fetch_array($result);//解析数据
}
?>
<h3>修改学生信息</h3>
<form action="action.php?action" method="get">
    <input type="hidden" value="<?php echo $row['newsid'] ?>" name="id"/>
    <input type="hidden" value="edit" name="action"/>
    <table>
        <tr>
            <td>新闻标题</td>
            <td><input style="width:300px;height:30px" type="text" name="newstitle"
                       value="<?php echo $row['newstitle'] ?>"/></td>
        </tr>
        <tr>
            <td>新闻地址</td>
            <td><input style="width:300px;height:30px" type="text" name="newsimg"
                       value="<?php echo $row['newsimg'] ?>"/></td>
        </tr>
        <tr>
            <td>新闻内容</td>
            <td><textarea style="width:300px;height:200px"
                          name="newscontent"><?php echo $row['newscontent'] ?></textarea></td>
        </tr>
        <tr>
            <td>添加时间</td>
            <td style="text-align:left;"><input type="date" style="width:150px;height:30px" name="addtime"
                                                value="<?php echo $row['addtime'] ?>"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <input style="width:100px;height:30px;font-size: 18px;" type="submit" value="修改"/>
                <input style="width:100px;height:30px;font-size: 18px;" type="reset" value="重置"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>