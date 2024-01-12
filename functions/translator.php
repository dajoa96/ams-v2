<?php
if (!defined('ACCESIBLE')) exit('Forbidden Access');

$lang_iso = "";
// if (session_status() != PHP_SESSION_ACTIVE) session_start();
$available_languages = ['en', 'es'];
global $available_languages;

function initTranslator() {
    global $available_languages;
    global $lang_iso;
    $active_lang = isset($_GET['lang']) && $_GET['lang'] != "" ? $_GET['lang'] : 'en';
    if (!in_array(strtolower($active_lang), $available_languages)) header('Location: ./ ');
    $lang_iso = $active_lang;
}

function tr($key, $translate_lang = "") {
    global $available_languages;
    global $lang_iso;
    if (!$key) return "INVALID TRANSLATION KEY";
    if ($translate_lang == "") $translate_lang = $lang_iso;
    else if (!in_array($translate_lang, $available_languages)) return "INVALID TRANSLATION LANGUAGE '".strtoupper($translate_lang)."'";
    include_once "translations/{$translate_lang}.php";
    if (!isset($translations) || !is_array($translations)) return "TRANSLATIONS LOAD ERROR";
    return isset($translations[$key]) ? $translations[$key] : "TRANSLATION KEY '$key' WAS NOT FOUND";
}

initTranslator();
?>