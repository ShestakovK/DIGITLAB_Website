<?php
  //Подключаем библиотеку для работы с API
  require_once __DIR__.'/google-api-php-client-main/vendor/autoload.php';
  
  //Прописываем путь к файлу с ключом сервисного аккаунта
  $googleAccountKeyFilePath = __DIR__.'Сюда запишите путь к скачанному ключу';
  putenv('GOOGLE_APPLICATION_CREDENTIALS='.$googleAccountKeyFilePath);

  //Так НАДО, если сомневаешься, лезь в документацию https://developers.google.com/sheets/api/
  $client = new Google_Client();
  $client->useApplicationDefaultCredentials();

  //Область к которым будет доступ, весь перечень есть в документации во вкладке Начало работы -> Выберите области действия
  $client->addScope('https://www.googleapis.com/auth/spreadsheets');
  $service = new Google_Service_Sheets($client);

  //ID таблицы
  $spreadsheetId = 'Сюда запишите ID таблицы';
?>
