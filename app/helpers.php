<?php

function cdn( $filepath )
{
    if (Config::get('app.url_static'))
    {
        return Config::get('app.url_static') . $filepath;
    }
    else
    {
        return Config::get('app.url') . $filepath;
    }
}

function getCdnDomain()
{
    return Config::get('app.url_static') ?: Config::get('app.url');
}

function lang($text)
{
    return str_replace('phphub.', '', trans('phphub.'.$text));
}

function array_strip_xss($array)
{
    $result = array();
    foreach ($array as $key => $value) {
        $key = strip_xss($key);
        if (is_array($value)) {
            $result[$key] = array_strip_xss($value);
        }
        else {
            $result[$key] = strip_xss($value);
        }
    }
    return $result;
}

function strip_xss($value)
{
    return Purifier::clean($value, 'ugc_body');
}
