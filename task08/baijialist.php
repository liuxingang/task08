<html>
<head>
    <title>新闻列表</title>
    <script src="js/jquery-2.1.4.min.js"></script>
    <script>
        function doDel(id) {
            if (confirm("确定要删除吗？")) {
                window.location = 'action.php?action=del&id=' + id;
            }
        }

        function loadXMLDoc() {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("show-wrap").innerHTML = xmlhttp.responseText;
                }

            };
            xmlhttp.open("GET", "add.php", true);
            xmlhttp.send();
        }

    </script>
    <style>
        table {
            margin: 20px auto;
            width: 85%;
            table-layout: fixed;
            border-collapse: collapse;
            text-align: center;
            border: 1px solid #aeaeae;
        }

        th {
            padding: 5px 0 5px;
        }

        td {
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding-left: 10px;;
            padding-right: 10px;;
        }

        table tr {
            height: 40px;
        }

        table tr:nth-child(odd) {
            background: #dedede;
        }

        table tr:first-child {
            background: #84da9c;
        }

        .del a {
            display: inline-block;
            text-decoration: none;
            background: #2192ff;
            width: 40px;
            height: 25px;
            line-height: 25px;
            color: #f3f3f3;
        }

        .del a:hover {
            background: #2171d0;
        }

        .del a:first-child {
            background: #ff4650;
        }

        .del a:first-child:hover {
            background: #ce3940;
        }


    </style>
</head>

<body>
<?php
//    include ("menu.php");//把菜单包含过来
header("content-type:text/html; charset=utf-8");
?>

<table border="2">
    <tr>
        <th width="30">ID</th>
        <th width="200">新闻标题</th>
        <th width="200">新闻图片</th>
        <th width="370">新闻内容</th>
        <th width="100">添加时间</th>
        <th width="120">操作</th>
    </tr>
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
    $sql = "select * from news WHERE lanmu = 'baijia'";//查找数据表
    $result = mysqli_query($con, $sql); //执行
    //遍历数组,前段显示数据
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>{$row['newsid']}</td>";
        echo "<td>{$row['newstitle']}</td>";
        echo "<td>{$row['newsimg']}</td>";
        echo "<td>{$row['newscontent']}</td>";
        echo "<td>{$row['addtime']}</td>";
        echo "<td class='del'>
                <a id='haha' href='javascript:doDel({$row['newsid']})'>删除</a>
                <a href='edit.php?id={$row['newsid']}'>修改</a>
                </td>";
        echo "</tr>";
    }
    mysqli_close($con);
    ?>
</table>

</body>
</html>
