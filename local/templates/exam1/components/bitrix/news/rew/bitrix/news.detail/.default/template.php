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

<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?= $arResult["DETAIL_TEXT"];?>	
		</div>
		<div class="review-autor">
			<?=$arResult["NAME"]?>
			<?=$arResult["DISPLAY_ACTIVE_FROM"]?>
			<?=GetMessage('YEAR')?>., 
			<?=$arResult["PROPERTIES"]["POSITION"]["VALUE"]?>, 
			<?=$arResult["PROPERTIES"]["COMPANY"]["VALUE"]?>.
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
		<img 
			src="<?=$arResult['IMAGE'] ?>" 
			alt="<?if ($arResult['IMAGE'] ):?><?=$arResult["DETAIL_PICTURE"]["ALT"]?><?endif;?>"
		>
	</div>
</div>
<?if (isset($arResult["DOCUMENTS"])): ?>
	<div class="exam-review-doc">
		<p><?=GetMessage('DOCUMENTS')?>:</p>
		<? foreach ($arResult['DOCUMENTS'] as $doc):?>
		<div class="exam-review-item-doc">
			<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
			<a href="<?=$doc['SRC']?>" download>
				<?=$doc['NAME']?>
			</a>
		</div>
		<?endforeach;?>
	</div>
<?endif;?>
<hr>