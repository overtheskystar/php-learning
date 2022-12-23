<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>大学英语四六级网上报名管理系统</title>
    <style>
        h2 {
            text-align: center
        }
        form {
            width: 350px;
            margin: 10px auto;
            background: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            padding-left: 130px;
        }

        tr {
            height: 30px;
            line-height: 30px;
        }

        input[type='text'], input[type='date'] {
            height: 20px;
            line-height: 25px;
            width: 150px;
        }

        select {
            height: 28px;
            line-height: 25px;
            width: 160px;
        }

        .btn {
            padding: 8px 20px;
            background-color: #2795F7;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<h2>大学英语四六级网上报名管理系统</h2>
<form action="regok.php" method="post">
    <table>
        <tr>
            <td>学号：</td>
            <td><input type="text" name="stuID"></td>
        </tr>
        <tr>
            <td>姓名：</td>
            <td><input type="text" name="stuName"></td>
        </tr>
        <tr>
            <td>班级：</td>
            <td>
                <select name="stuClass">
                    <option value="1班">1班</option>
                    <option value="2班">2班</option>
                    <option value="3班">3班</option>
                </select>
            </td>
        </tr>
            <td>报考类型：</td>
            <td>
                <input type="radio" name="examType" value="四级" id="CET4"> <label for="cet4">四级</label>
                <input type="radio" name="examType" value="六级" id="CET6"> <label for="cet6">六级</label>
            </td>
    <tr>
            <td colspan="2">
                <input type="submit" value="立即提交" class="btn"/>
                <input type="reset" value="重新填写" class="btn"/>
            </td>
        </tr>
    </table>
</form>
</body>
</html>