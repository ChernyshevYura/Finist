<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-1.10.2.js"></script>

<iframe id="form_insurance" src="//mitmi.online/form-insurance/?login=6440221" frameborder="0" height="100%" width="100%" scrolling="no"></iframe>
<script src="//mitmi.online/static/iframe/parent.js"></script>



<?php
require_once("request.php");
require_once("config.php");

  $request = new Request;
  $config = new Config;

  $banks = $request->GetData($config::url_banks);
  echo('<form method="post" action="" class="">');
  echo('<span>Banks</span><br><select>');
  foreach($banks as $item){
    echo '<option value="strtolower($item[\'name\'])">' . $item['name'] . '</option>';
  }
  echo('</select>');
  echo('</form>');

  $regions = $request->GetData($config::url_regions);
  echo('<form method="post" action="" class="">');
  echo('<span>Regions</span><br><select>');
  foreach($regions as $item){
    echo '<option value="strtolower($item[\'name\'])">' . $item['name'] . '</option>';
  }
  echo('</select>');
  echo('</form>');

  $marks = $request->GetData($config::url_marks);
  echo('<form method="post" action="" class="">');
  echo('<span>Marks</span><br><select>');
  foreach($marks as $item){
    echo '<option value="strtolower($item[\'name\'])">' . $item['name'] . '</option>';
  }
  echo('</select>');
  echo('</form>');

  $models = $request->GetData($config::url_models);
  echo('<form method="post" action="" class="">');
  echo('<span>Models</span><br><select>');
  foreach($models as $item){
    echo '<option value="strtolower($item[\'name\'])">' . $item['name'] . '</option>';
  }
  echo('</select>');
  echo('</form>');
  
?>
<form action="mitmiRequest.php" method="POST" >
  <fieldset class="fildset_input">
    <input class="fio" name="fio" type="text" autocomplete="off">
    <span>ФИО</span>
  </fieldset>

  <fieldset class="fildset_input">
    <span>Пол</span>
    <select name="sex">
      <option value="male">Мужской</option>
      <option value="female">Женский</option>
    </select>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="birthday" name="birthday" type="text" autocomplete="off">
    <span>Дата рождения</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="passport" name="passport" type="text" autocomplete="off">
    <span>Серия и номер паспорта(Пример: 620-001)</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="day-pass" name="day-pass" type="text" autocomplete="off">
    <span>Дата выдачи</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="who-pass" name="who-pass" type="text" autocomplete="off">
    <span>Кем выдан(Пример:МВД ПО РЕСП. МОРДОВИЯ)</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="residence" name="residence" type="text" autocomplete="off">
    <span>Место жительства по паспорту</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="phone" name="phone" type="text" autocomplete="off">
    <span>Номер телефона</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="email" name="email" type="text" autocomplete="off">
    <span>Почта</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="hieght" name="hieght" type="text" autocomplete="off">
    <span>Рост</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="weight" name="weight" type="text" autocomplete="off">
    <span>Вес</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="top-pressure" name="top-pressure" type="text" autocomplete="off">
    <span>Верхнее давление</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="bottom-pressure" name="bottom-pressure" type="text" autocomplete="off">
    <span>Нижнее давление</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="employment-status" name="employment-status" type="text" autocomplete="off">
    <span>Статус занятости</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="activity-kind" name="activity-kind" type="text" autocomplete="off">
    <span>Вид деятельности</span>
    <span class="jsClearInput"></span>
  </fieldset>



  <?php
   $banks = $request->GetData($config::url_banks);
   echo('<span>Banks</span><br><select name="insurance">');
   foreach($banks as $item){
     echo '<option value="strtolower($item[\'name\'])">' . $item['name'] . '</option>';
   }
   echo('</select>');
  ?>

  <fieldset class="fildset_input">
    <input class="town" name="town" type="text" autocomplete="off">
    <span>Город выдачи</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="contract-number" name="contract-number" type="text" autocomplete="off">
    <span>Номер договора</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="date-start" name="date-start" type="text" autocomplete="off">
    <span>Дата начала договора</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="date-stop" name="date-stop" type="text" autocomplete="off">
    <span>Дата окончиния договора</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="remaining" name="remaining" type="text" autocomplete="off">
    <span>Остаток задолжности</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="polis-start" name="polis-start" type="text" autocomplete="off">
    <span>Начало действия полиса</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <input type="submit" value="Узнать варианты страхования">
</form>