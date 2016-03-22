<html>
<head>
    <title>新增新闻信息</title>
    <style>
        #add-wrap {
            text-align: center;
            padding-top: 20px;
        }

        #add-wrap table {
            margin: 20px auto;
            border: none;

        }

        #add-wrap table tr {
            background: none;

        }

        #add-wrap table td {
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            padding-left: 10px;
            padding-right: 10px;
            text-align: left;
        }

        #add-wrap table tr td:first-child {
            text-align: right;
            width: 35%;
        }
    </style>
</head>
<body>
<?php
header("content-type:text/html; charset=utf-8");
//        include ("menu.php");
?>
<div id="add-wrap">
    <h3>新增新闻信息</h3>
    <form action="action.php" method="get">
        <input type="hidden" value="add" name="action"/>
        <table>
            <tr>
                <td>新闻标题</td>
                <td><input style="width:300px;height:30px" type="text" name="newstitle"/></td>
            </tr>
            <tr>
                <td>新闻地址</td>
                <td><input type="text" style="width:300px;height:30px" name="newsimg"/></td>
            </tr>
            <tr>
                <td>新闻内容</td>
                <td><textarea style="width:300px;height:200px" name="newscontent"></textarea></td>
            </tr>
            <tr>
                <td>添加时间</td>
                <td style="text-align:left;"><input type="date" style="width:150px;height:30px" name="addtime"/></td>
            </tr>
            <tr>
                <td>添加栏目</td>
                <td style="text-align:left;"><input type="text" style="width:150px;height:30px" name="lanmu"/></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <input style="width:100px;height:30px;font-size: 18px;" type="submit" value="添加"/>
                    <input style="width:100px;height:30px;font-size: 18px;" type="reset" value="重置"/>
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>