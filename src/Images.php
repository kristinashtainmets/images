<?php
namespace Images;
class Images{
    public function working_with_pictures($directory, $images, $id_generation): bool|string
    {
        if(move_uploaded_file($images['image']['tmp_name'], $directory . $id_generation)){
            return $id_generation;
        }else{
            return false;        }
    }
}