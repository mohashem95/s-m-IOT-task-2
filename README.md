# s-m-IOT-task-2
 
you can find English description below

بسم الله الرحمن الرحيم

ثاني مهمة من مهام تدريب شركة الاساليب الذكية.

شرح الفكرة:
هذا الموقع هو اضافة الى الموقع السابق الموجود في https://github.com/mohashem95/s-m-IOT-task-1 وقد اضفنا له ازرار اتجاهات للتحكم بقاعدة الروبوت 
هذا الموقع عبارة عن لوحة تحكم بذراع وقاعدة الروبوت، يقوم المستخدم بتحديد زاوية كل محرك من ال 6 محركات عن طريق تحريك واختيار تشغيل ثم حفظ، وسيتم حفظ قيم هذه الزوايا في قاعدة البيانات .
وايضا يستطيع المستخدم تحريك قاعدة الروبوت للامام والخلف واليمين واليسار وايقافه ز

الملفات الموجودة:

1- sliders.php : صفحة الواجهة الرئيسية للوحة التحكم، وفيها اشرطة التحكم بزوايا المحركات ال 6 ، زر التشغيل والحفظ

2- db.php : صفحة الاتصال بقاعدة البيانات عن طريق php

3- insert.php : ملف يستقبل قيم المحركات ويخزنها في قاعدة البيانات ، وعندما يتم التخزين بدون مشاكل ينقل المستخدم الى صفحة فيها رسالة بان البيانات تم تخزينها، ويعطي المستخدم رابط للرجوع الى واجهة لوحة التحكم الرئيسية ورابط اخر لعرض بيانات اخر سطر من قاعدة البيانات

4-query.php : ملف استرجاع بيانات اخر سطر من قاعدة البيانات وعرضها للمستخدم مع رابط للرجوع الى واجهة لوحة التحكم الرئيسية.

5- motors.sql ملف قاعدة البيانات

6 - insert_dir.php ملف يستقبل قيمة الزر الذي تم ضغطه ويخزن اول حرف منه (مثلا القيمة right يخزن في قاعدة البيانات الحرف r  )، وعندما يتم التخزين بدون مشاكل ينقل المستخدم الى صفحة فيها رسالة بان البيانات تم تخزينها، ويعطي المستخدم رابط للرجوع الى واجهة لوحة التحكم الرئيسية ورابط اخر لعرض بيانات اخر سطر من قاعدة البيانات

7 - query_dir.php ملف يسترجع اخر اتجاه مدخل من المستخدم لقاعدة البيانات مع رابط للرجوع الى واجهة لوحة التحكم الرئيسية

وتم دمج المهمة الثالثة (الدردشة الآلية) مع هذا الموقع للتفاصيل : 


=============================================================================================
English

this is the seccond task of smart methods summer training program.

Overveiw:
This web app is an update for the existing here https://github.com/mohashem95/s-m-IOT-task-1 , I added a panel with buttons to control the robot base movement direction.
This web app is a control panel for robotic arm and robot base, user will use the sliders to set the angle of each motor of 6 motors, then will set the switch on/off and click save, and the angles values and the switch value will all be saved to the databse.
and the user will also be able to move the robot in 4 directions (right, left, forward, and backward) and stop the base.

Project files:

1- sliders.php: the main page for the control panel, containing sliders for each motor, on/off switch, and save button.

2-db.php: MySQL database connection using php.

3-insert.php: recieves inputted values and saves it to the db, if there is no errors it will navigate to a page contains a text message that the data saved, link to get back to the control panel, link to show the last row of the db.

4- query.php: retrives last row of the database and shows it to the user, with a link to get back to the control panel.

5- motorstable.sql: database file.

6 - insert_dir.php recieves clicked button value and inserts the first letter to the db (example: when user clicks right the letter r will be inserted into db), if there is no errors it will navigate to a page contains a text message that the data saved, link to get back to the control panel, link to show the last row of the db.

7 - query_dir.php  retrives last row of the directions table and shows it to the user, with a link to get back to the control panel.

and task 3 (chatbot) is embeded within this repo. for details: 
