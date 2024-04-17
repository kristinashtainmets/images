<?php
namespace Images;

function downloading(string $directory = '', array $images = [], string $id_generation = ''): Images
{
    return new Images($directory, $images, $id_generation);
}
