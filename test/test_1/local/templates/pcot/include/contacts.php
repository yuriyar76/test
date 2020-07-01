<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
    <div class="contacts_data-wrap d-flex flex-column justify-content-center align-items-center">
        <div class="row section-title d-flex flex-row justify-content-start">
             <span itemscope itemtype="http://schema.org/LocalBusiness">
         <?
         if (class_exists('McData'))
             new McData('https://www.korovainfo.ru/', 'local',
                 [
                     'name_org' => 'Общество с ограниченной ответственностью «Профессиональный центр охраны труда»',
                     'description_org' => 'Специальная оценка условий труда и производственный контроль от ПЦОТ',
                     'image'=>'',
                     'address' => [
                         'streetAddress'=>'150040, город Ярославль,пр.Октября,д.56,оф.205',
                         'addressLocality'=>'150040, город Ярославль',
                         'addressRegion'=>'Россия, город Ярославль',
                         'index'=>'150040'
                     ],
                     'telephone' => '+7-(4852)-98-97-84/94-20-60',
                     'email' => 'LabSafety@yandex.ru',
                     'url' => 'https://pcot.su/'
                 ]
             );
         ?>
    </span>
            <div class=" title">
                <h2 class="title-h1">Контакты</h2>
            </div>
        </div>
        <div class="contacts_data-adress d-flex flex-column justify-content-center">
            <div class="contacts_data-adress-phone contacts_data-adress-m">
                <p>Тел/факс: <span>+7-(4852)-98-97-84/94-20-60</span></p>
            </div>
            <div class="contacts_data-adress-mail contacts_data-adress-m">
                <p> Эл. почта: <span><a href="">LabSafety@yandex.ru</a></span></p>
            </div>
            <div class="contacts_data-adress-adr contacts_data-adress-m">
                <div class="contacts_data-adress-txt">
                    <p>Адрес в Ярославле:</p>
                    <span>150040,Ярославль,пр.Октября,д.56,<br/>оф.205,второй этаж</span>
                </div>
            </div>
            <div class="contacts_data-adress-adr contacts_data-adress-m">
                <div class="contacts_data-adress-txt">
                    <p>Адрес в Санкт-Петербург:</p>
                    <span>195197,Санкт-Петербург,ул.Минеральная,д.13,<br/>лит.3,пом.6-Н</span>
                </div>
            </div>


        </div>
    </div>

