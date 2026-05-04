<?php

function accordion(array $data): string
{
    if (!isset($data)) {
        return '';
    }

    $accordion_id = uniqid();

    $accordion = '<div class="accordion" id="accordionExample' . $accordion_id . '">';
    foreach ($data as $index => $item) {
        $accordion .= '<div class="accordion-item">';
        $accordion .= '<h2 class="accordion-header">';
        $accordion .= '<button class="accordion-button ' . ($item['show'] ? '' : 'collapsed') . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $accordion_id . $index . '" aria-expanded="false" aria-controls="collapse' . $accordion_id . $index . '">';
        $accordion .= htmlspecialchars($item['title']);
        $accordion .= '</button>';
        $accordion .= '</h2>';
        $accordion .= '<div id="collapse' . $accordion_id . $index  . '" class="accordion-collapse collapse' . ($item['show'] ? ' show' : '') . '" aria-labelledby="heading' . $accordion_id . $index . '" data-bs-parent="#accordionExample' . $accordion_id . '">';
        $accordion .= '<div class="accordion-body">';
        $accordion .= htmlspecialchars($item['body']);
        $accordion .= '</div>';
        $accordion .= '</div>';
        $accordion .= '</div>';
    }
    $accordion .= '</div>';


    return $accordion;
}
