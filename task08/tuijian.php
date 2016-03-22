<?php
//连接数据库
require_once('config.php');
$con = mysqli_connect(HOST, USERNAME, PASSWORD);
if (!$con) {
    die('数据库连接失败' . mysqli_error($con));
}
// echo "数据库连接成功";  测试数据库连接成功
mysqli_query($con, 'set names utf8');
mysqli_select_db($con, 'phplesson');//选库
$sql = "select * from news  WHERE lanmu = 'tuijian' order by addtime desc";//查找数据表
$result = mysqli_query($con, $sql); //执行
if ($result && mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimun-scale=1,user-scalable=no">
    <title>百度新闻</title>
    <link type="text/css" href="css/mystyle.css" rel="stylesheet"/>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/myjs.js"></script>
</head>
<body>
<!--承载层-->
<div id="wrapper" class="news">
    <div id="index_view" style="display:block">
        <!--新闻列表-->
        <div class="index-view-subpage-feed">
            <div class="index-list">
                <?php
                if (empty($data)) {
                    echo "当前没有新闻";
                } else {
                    foreach ($data as $value) {
                        ?>
                        <div class="index-list-item">
                            <div class="index-list-main showleft">
                                <!--图片-->
                                <div class="index-list-image">
                                    <img src="<?php echo $value['newsimg'] ?>"/>
                                </div>
                                <!--内容-->
                                <div class="index-list-main-text">
                                    <div class="index-list-main-title"><?php echo $value['newstitle'] ?></div>
                                    <div class="index-list-main-abs"><?php echo $value['newscontent'] ?></div>
                                </div>
                                <!--时间-->
                                <div class="index-list-bottom">
                                    <div class="index-list-main-time">
                                        <b class="tip-time"><?php echo $value['addtime'] ?></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>