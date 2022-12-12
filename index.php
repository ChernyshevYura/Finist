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
<form method="post" action="" class="">
  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>ФИО</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Пол</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Дата рождения</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Серия паспорта</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Дата выдачи</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Кем выдан</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Место жительства по паспорту</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Номер телефона</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <fieldset class="fildset_input">
    <input class="fio" type="text" autocomplete="off">
    <span>Почта</span>
    <span class="jsClearInput"></span>
  </fieldset>

  <!-- <a href="request.php">GET</a> -->
</form>

