<?php

function genTag(string $tag, array $attributes){

    $result = '<'.$tag.' ' ;

    foreach ($attributes as $attrName => $attrValue){
       $result.= $attrName.'="'.$attrValue.'" ';
    }

    $result.= ' />';
    return $result;
}