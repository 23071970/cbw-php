<?php

function accordion($data)
{
    $accordion_id = uniqid();
    $accordion = '<div class="accordion" id="accordionExample' . $accordion_id . '">';

    foreach ($data as $index => $item) {
        $accordion .= '<div class="accordion-item">';
        $accordion .= '<h2 class="accordion-header">';
        $accordion .= '<button class="accordion-button ' . ($item['show'] ? '' : 'collapsed') . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $accordion_id . $index . '" aria-expanded="' . ($item['show'] ? 'true' : 'false') . '" aria-controls="collapse' . $index . '">';
        $accordion .= $item['title'];
        $accordion .= '</button>';
        $accordion .= '</h2>';
        $accordion .= '<div id="collapse' . $accordion_id . $index . '" class="accordion-collapse collapse ' . ($item['show'] ? 'show' : '') . '" data-bs-parent="#accordionExample' . $accordion_id . '">';
        $accordion .= '<div class="accordion-body">';
        $accordion .= $item['body'];
        $accordion .= '</div>';
        $accordion .= '</div>';
        $accordion .= '</div>';
    }
    return $accordion .= '</div>';
}


function accordionLang($data, $lang)
{
    $accordion_id = uniqid();
    $accordion = '<div class="accordion" id="accordionExample' . $accordion_id . '">';

    foreach ($data[$lang] as $index => $item) {
        $accordion .= '<div class="accordion-item">';
        $accordion .= '<h2 class="accordion-header">';
        $accordion .= '<button class="accordion-button ' . ($item['show'] ? '' : 'collapsed') . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $accordion_id . $index . '" aria-expanded="' . ($item['show'] ? 'true' : 'false') . '" aria-controls="collapse' . $index . '">';
        $accordion .= $item['title'];
        $accordion .= '</button>';
        $accordion .= '</h2>';
        $accordion .= '<div id="collapse' . $accordion_id . $index . '" class="accordion-collapse collapse ' . ($item['show'] ? 'show' : '') . '" data-bs-parent="#accordionExample' . $accordion_id . '">';
        $accordion .= '<div class="accordion-body">';
        $accordion .= $item['body'];
        $accordion .= '</div>';
        $accordion .= '</div>';
        $accordion .= '</div>';
    }
    return $accordion .= '</div>';
}
