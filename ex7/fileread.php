<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>从文本文件中读取注册服务条款</title>
</head>
<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" bgcolor="#FFFFFF">
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
      <td width="11" valign="top">&nbsp;</td>
      <td width="558" valign="top">
           <table width="100%" height="60" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                  <td>
                  <table width="100%" height="42" border="0" cellpadding="0" cellspacing="0">
                    <tr><td height="10" colspan="2"  background="images/sub_line.GIF"></td></tr>
                    <tr><td height="3" colspan="2"></td></tr>
                    <tr><td height="29" class="word_blue">当前位置：首页 &gt; 会员中心 &gt; 注册新会员 &gt;&gt;&gt;</td>
                           <td width="19%" align="center" class="word_blue">&nbsp;</td>
                    </tr>
                  </table>
                  </td>
                  </tr>
          </table>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
                 <tr>
                 <td width="15" height="400" valign="top">&nbsp;</td>
                 <td width="500" valign="top">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                       <tr><td width="100%" height="5"></td></tr>
                       <tr><td height="60" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;·请仔细阅读并接受“会员服务条款”。<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;·点击“我接受”继续。</td></tr>
                      <tr align="center" valign="top">
                      <td height="69">
                          <form name="form1" method="post" action="reg.php">
                          <table width="88%" height="100" border="0" cellpadding="0" cellspacing="0">
                              <tr><td align="center">会员服务条款</td></tr>
                              <tr>
                                <td height="27" align="center" class="word_deepgrey">
                                  <textarea name="artcle" cols="120" rows="30" class="textarea">
                                  <?php
                                     //******************
                                     //题目在这里；注意：请选择保留一种方法，然后删去①此三行提示and②其他方法；食用方法：删去行前双杆
                                     //******************
//法1首选方法
//$contents = file_get_contents('agreement.txt');
//echo $contents;
//echo "<br>";
//法2
//readfile('agreement.txt');
//echo "<br>";
//法3：读取每一行直到文件结尾
//$file = fopen("agreement.txt", "r");
//while(!feof($file))
//{
//    echo fgets($file);
//}
//fclose($file);
//法4：读取每个字符直到文件结尾
//$file = 'agreement.txt';
//$handle = fopen($file, 'r') or die('打开文件失败');
//while (($char = fgetc($handle)) !== false) {
//    echo "$char";
//}
//fclose($handle);
                                   ?>
                                 </textarea>
                                </td>
                              </tr>
                              <tr><td height="27" align="center" class="word_deepgrey">
                                    <input type="submit" class="btn_grey" value="我接受">&nbsp;
                                    <input type="button" class="btn_grey" value="我不接受" onClick="window.close();">
                                    </td>
                             </tr>
                        </table>
                        </form>
                     </td>
                     </tr>
                </table>
                </td>
                </tr>
             </table>
         </td>
         </tr>
         </table>
</td>
<td width="31" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
</tr>
</table>
</body>
</html>
