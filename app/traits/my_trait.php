<?php

namespace App\traits;



trait  my_trait
{
    protected function uploud_image($photo,$path){
    $file_extension=$photo->getClientOriginalExtension();
    $file_name=time(). "." .$file_extension;
    $photo->move($path,$file_name);
    return $file_name;

    }
}
