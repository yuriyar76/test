<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<? $user_id = $USER->GetID();
if ($user_id == 1):?>
    <?//debug($arResult);?>
<?endif?>


<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
        <div class="col-md-12 advantages-wrap_wrap d-flex flex-row flex-wrap justify-content-around">
            <?for($i=1;$i<=2;$i++):?>
                <div class="col-md-6 advantages-wrap d-flex flex-column align-items-start">

                    <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                        <div class="advantages_icon d-flex flex-column justify-content-center">
                            <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/career.png" alt="">
                        </div>
                        <div class="advantages_content d-flex flex-column justify-content-center">
                            <p>
                                (1)Мы аккредитованная организация Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Accusantium aspernatur .
                            </p>
                        </div>
                    </div>
                    <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                        <div class="advantages_icon d-flex flex-column justify-content-center">
                            <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/certificate.png" alt="">
                        </div>
                        <div class="advantages_content d-flex flex-column justify-content-center">
                            <p>
                                (1)Autem eveniet officiis sint? Delectus deserunt distinctio eveniet

                            </p>
                        </div>
                    </div>
                    <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                        <div class="advantages_icon d-flex flex-column justify-content-center">
                            <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/hired.png" alt="">
                        </div>
                        <div class="advantages_content d-flex flex-column justify-content-center">
                            <p>
                                (1)Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                A aliquam architecto cumque debitis, doloremque fugit

                            </p>
                        </div>
                    </div>
                   
                </div>
            <?endfor;?>
         </div>
    </div>
    <div class="tab-pane fade show" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
        <div class="col-md-12 advantages-wrap_wrap d-flex flex-row flex-wrap justify-content-around">
            <div class="col-md-6 advantages-wrap d-flex flex-column align-items-start">
                <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                    <div class="advantages_icon d-flex flex-column justify-content-center">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/career.png" alt="">
                    </div>
                    <div class="advantages_content d-flex flex-column justify-content-center">
                        <p>
                            (2) Мы аккредитованная организация Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit. Accusantium aspernatur .
                        </p>
                    </div>
                </div>
                <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                    <div class="advantages_icon d-flex flex-column justify-content-center">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/certificate.png" alt="">
                    </div>
                    <div class="advantages_content d-flex flex-column justify-content-center">
                        <p>
                            (2) Autem eveniet officiis sint? Delectus deserunt distinctio eveniet

                        </p>
                    </div>
                </div>
                <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                    <div class="advantages_icon d-flex flex-column justify-content-center">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/hired.png" alt="">
                    </div>
                    <div class="advantages_content d-flex flex-column justify-content-center">
                        <p>
                            (2)Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            A aliquam architecto cumque debitis, doloremque fugit

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 advantages-wrap d-flex flex-column align-items-start">
                <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                    <div class="advantages_icon d-flex flex-column justify-content-center">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/accounting.png" alt="">
                    </div>
                    <div class="advantages_content d-flex flex-column justify-content-center">
                        <p>
                            (2)Aliquid consequatur dolores eum eveniet harum impedit

                        </p>
                    </div>
                </div>
                <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                    <div class="advantages_icon d-flex flex-column justify-content-center">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/id-card.png" alt="">
                    </div>
                    <div class="advantages_content d-flex flex-column justify-content-center">
                        <p>
                            (2)Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquam architecto aut dicta ea esse facere facilis!
                        </p>
                    </div>
                </div>
                <div class="advantages_content_wrap d-flex flex-row justify-content-between">
                    <div class="advantages_icon d-flex flex-column justify-content-center">
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/images/icon/money.png" alt="">
                    </div>
                    <div class="advantages_content d-flex flex-column justify-content-center">
                        <p>
                            (2)Lorem ipsum dolor sit amet, consectetur adipisicing elit.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <nav>
    <div class="d-flex flex-row justify-content-center nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">&bull;</a>
        <a class="nav-item nav-link" id="nav-two-tab" data-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="false">&bull;</a>
    </div>
</nav>
