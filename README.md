# DIGITLAB_Website
# Начало
Создайте гугл таблицу.

Перейдите на сайт [Google Cloud Platform Console](https://console.cloud.google.com/cloud-resource-manager).

Создайте проект.

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/4ef1bc91-0f02-48a9-acef-192cfa9769dc)

Включите [Google Sheet Api](https://console.cloud.google.com/apis/library/sheets.googleapis.com?project=test-api-project-396201)

Нажмите на выпадающее меню, выберите APP's & Service, убедитесь, что вы работаете с созданным проектом.

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/9ca14f5b-18a0-40fb-a34d-0276d935b315)

Перейдите во владку "Credentials", далее "New Credentials" -> "Service Account".

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/67b7172e-7841-4ed6-98a3-01dcab87f536)

Создайте Service account, в пункте 2 выдайте права Owner.

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/8e1aca8d-9d63-4ac3-aee3-f0b5482b5bc6)

Нажмите на созданный аккаунт.

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/2b0e6a4f-b50f-4ed9-b299-d34580a1fdd0)

Выберите "Key" -> "Add Key" -> "Create New Key" и выберите формат JSON. (Скачается закрытый ключ)

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/994ce76f-96f1-44ae-85ee-d57946c0672b)

Скопируйте ссылку на этот аккаунт и предоставьте ему доступ в гугл таблицах.

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/d8575c4c-f85f-421e-abc1-2168c0c140fe)

Подставьте в 6 строку файла `login.php` ссылку на расположение скачанного вами ключа, а в 18 строку, ссылку на spreadsheetId

![image](https://github.com/ShestakovK/DIGITLAB_Website/assets/142473859/30a24e34-85fd-42f8-a2c8-b94df3429e96)
