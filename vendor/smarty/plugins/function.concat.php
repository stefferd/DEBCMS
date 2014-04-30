<?php
/**
 * Gemaakt door van den Berg Multimedia.
 * Gebruiker: s.van.den.berg
 * Datum: 19-2-13 21:39
 * Omschrijving:
 */
function smarty_function_concat($params, &$smarty){
    $concat = $params['left'] . $params['right'];

    $smarty->assign($params['var'], $concat);
}
?>