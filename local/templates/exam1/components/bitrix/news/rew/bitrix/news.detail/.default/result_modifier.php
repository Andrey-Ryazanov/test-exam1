<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arResult */

$arResult['IMAGE'] = isset($arResult["DETAIL_PICTURE"]["SRC"]) ? $arResult["DETAIL_PICTURE"]["SRC"] : SITE_TEMPLATE_PATH . '/img/no_photo.jpg';

if (empty($arResult["PROPERTIES"]["DOCUMENT"]["VALUE"]) === false) {
    $docs = (array)$arResult["PROPERTIES"]["DOCUMENT"]["VALUE"];
    foreach ($docs as $docId)
    {
        $src = CFile::GetPath($docId);
        $arDoc = CFile::GetById($docId)->Fetch();

        $arResult['DOCUMENTS'][] =
        [
            'SRC' => $src,
            'NAME' => $arDoc['ORIGINAL_NAME'] 
        ];
    }
}