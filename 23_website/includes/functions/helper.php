<?php
function includeScripts(array $scripts)
{
    if (!empty($scripts) && is_array($scripts)) {
        foreach ($scripts as $script) {
            echo "<script src='" . JS_URL . "/$script'></script>";
        }
    }
}
