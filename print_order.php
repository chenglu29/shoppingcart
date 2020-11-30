<?php
  //如果購物車是空的，即顯示 "你尚未選購任何產品" 的訊息
  if (empty($_COOKIE["book_no_list"]))
  {
    echo "<script type='text/javascript'>";
    echo "alert('你尚未选购任何产品');";
    echo "history.back();";		
    echo "</script>";
  }
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body background="bg1.jpg">
    <h3>注意事项</h3>
    <ol type="1">
      <li>
        订阅方法一：请填好信用卡专用订阅单后装订，免贴邮票，
        直接投邮即可，亦可发送传真至 02-23695588。
      </li>
      <li>
        订阅方法二：请利用邮局划拨单，填好姓名、户名、杂志、起讫月
        份、电话，直接至邮局划拨付款。账号：12345678户名：快乐书城。
      </li>
      <li>
        寄书与补书：您将于邮件寄出之后的 10 日内收到书籍，若没有收到
        ，请来电洽询 02-23695599。
      </li>
    </ol>
    <hr>
    <table border="1" bgcolor="white" rules="cols" align="center" cellpadding="5">
    <tr height="25">
				<td colspan="4" align="Center" bgcolor="#CCCC00">个人资料</td>
    </tr>
    <tr height="25">
      <td colspan="4">姓名：<u><?php echo $_COOKIE["name"] ?>
        <?php for ($i = 0; $i <= 100 - 2* strlen($_COOKIE["name"]); $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">电话：
        <u><?php for ($i = 0; $i <= 100; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">地址：
        <u><?php for ($i = 0; $i <= 100; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        邮寄方式：□国内限时&nbsp;&nbsp;&nbsp;&nbsp;□国内挂号 (另加20元邮资)
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        付款方式：□JCB CARD&nbsp;&nbsp;&nbsp;□VISA CARD&nbsp;&nbsp;&nbsp;□MASTER CARD
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        信用卡卡号：<u><?php for ($i = 0; $i <= 89; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        有效日期：<u>公元<?php for ($i = 0; $i <= 85; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        签名(与信用卡签名相同)：<u><?php for ($i = 0; $i <= 66; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        支付总金额：<u><?php for ($i = 0; $i <= 89; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        开立发票：□二联式&nbsp;&nbsp;&nbsp;&nbsp;□三联式
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        发票地址：<u><?php for ($i = 0; $i <= 93; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4">
        统一编号：<u><?php for ($i = 0; $i <= 93; $i++) echo "&nbsp;"; ?></u>
      </td>
    </tr>
    <tr height="25">
      <td colspan="4" align="center" bgcolor="#CCCC00">订单明细</td>
    </tr>
    <tr height="25" align="center" bgcolor="FFFF99">
      <td>书名</td>
      <td>定价</td>
      <td>数量</td>
      <td>小计</td>																
    </tr>			
      <?php
        //取得購物車資料
        $book_name_array = explode(",", $_COOKIE["book_name_list"]);
        $price_array = explode(",", $_COOKIE["price_list"]);		
        $quantity_array = explode(",", $_COOKIE["quantity_list"]);		
					
        //顯示購物車內容
        $total = 0;		
        for ($i = 0; $i < count($book_name_array); $i++)
        {
          //計算小計
          $sub_total = $price_array[$i] * $quantity_array[$i];
					
          //計算總計
          $total += $sub_total;
					
          //顯示各欄位資料
          echo "<tr>";	
          echo "<td align='center'>" . $book_name_array[$i] . "</td>";			
          echo "<td align='center'>$" . $price_array[$i] . "</td>";
          echo "<td align='center'>" . $quantity_array[$i] . "</td>";
          echo "<td align='center'>$" . $sub_total . "</td>";
          echo "</tr>";
        }
        echo "<tr align='right' bgcolor='#CCCC00'>";
        echo "<td colspan='4'>总金额 = " . $total . "</td>";	
        echo "</tr>";	
      ?>
    </table>
  </body>
</html>