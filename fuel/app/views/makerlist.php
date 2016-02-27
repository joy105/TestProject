<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>商品価格管理システム</title>
  <!-- ?php echo Asset::css('style.css'); ? -->
</head>
<body>
  <div class="header">
    <h1>メーカー管理</h1>
  </div>
  <div class="main">
      <!-- 
    <table class="search">
      <tr>
        <th>メーカーコード</th>
        <td>
          <select class="dept_code">
            <option selected>（選択してください）</option>
      -->
            <!-- ?php
            foreach ($depts as $dept)
            {
                echo '<option>'.$dept['DEPT_NAME'].'</option>';
            }
            ? -->
      <!--
          </select>
        </td>
      </tr>
      <tr>
        <th>社員コード</th>
        <td><input type="text" class="emp_code small" value="" /></td>
      </tr>
      <tr>
        <th>社員名</th>
        <td><input type="text" class="emp_name wide" value="" /></td>
      </tr>
    </table>
    <div class="action_area">
      <button class="search_button">検索</button>
    </div>
      -->
    <table class="list">
      <tr>
        <th style="width: 10%;">メーカーコード</th>
        <th style="width: 20%;">メーカー名</th>
        <th>備考</th>
      </tr>
      <?php
      foreach ($makers as $maker)
      {
          echo '<tr>'.
               '<td>'.$maker['maker_code'].'</td>'.
               '<td>'.$maker['maker_name'].'</td>'.
               '<td>'.$maker['maker_memo'].'</td>'.
            /*   '<td>'.date('Y/m/d', strtotime($user['ENTER_DATE'])).'</td>'. */
               '</tr>';
      }
      ?>
    </table>
  </div>
</body>
</html>
