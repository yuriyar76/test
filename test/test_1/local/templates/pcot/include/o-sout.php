<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="content_about">
        <div class="about">
            <span itemscope itemtype='http://schema.org/Article'>
<?
if (class_exists('McData'))
    new McData("https://www.{$_SERVER['HTTP_HOST']}/",'article',
        [
            'body' =>$APPLICATION->IncludeComponent("bitrix:main.include", "",
                [
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include/o-sout-text.php"
                ], false),
            'name'=>$APPLICATION->IncludeComponent("bitrix:main.include", "",
                [
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include/o-sout-title.php"
                ], false),
            'mainEntityOfPage'=>'',
            'url'=>'',
            'datePublished'=>'',
            'dateModified'=>'',
            'publisher'=>[
                'logo'=>'',
                'name'=>'',
                'telephone'=>'',
                'address'=>'',
                'url'=>''
            ],
            'author'=>[
                'name'=>'',
            ],
            'headline'=>$APPLICATION->IncludeComponent("bitrix:main.include", "",
                [
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => SITE_TEMPLATE_PATH."/include/o-sout-title.php"
                ], false),
            'image'=>""
        ]
    );
?>
</span>
            <div class="row section-title d-flex flex-row justify-content-center">
                <div class="title">
                    <h2 class="title-h1"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_TEMPLATE_PATH."/include/o-sout-title.php"),
        false);?></h2>
                </div>
            </div>
            <div class="col-md-12 about-wrap_wrap d-flex flex-row flex-wrap justify-content-around">
                <div class="col-md-6 wrap-about_img d-flex flex-column justify-content-start">
                    <div class="col-md-12 about-img sout-img">
                    </div>
                </div>
                <div class="col-md-6 wrap-about_text d-flex flex-column justify-content-center">
                    <div class="about-text"><?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => SITE_TEMPLATE_PATH."/include/o-sout-text.php"),
        false);?></div>
                </div>
            </div>

        </div>
    </div>