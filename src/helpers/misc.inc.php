<?php 
// miscellaneous file (misc)

function response($data): void {
    json_encode([$data]);
}