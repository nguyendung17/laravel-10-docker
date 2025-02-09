<?php 
if(!function_exists('showInputError')){
    function showInputError($errors,$key){
        return  $errors->any() && $errors->first($key)?'border border-danger':'';
    }
}
if(!function_exists('showInputErrorText')){
    function showInputErrorText($errors,$key){
        return  $errors->any() && $errors->first($key)?"<span class='help-block'><small>{$errors->first($key)}</small></span>":'';
    }
}
if(!function_exists('resizeImage')){
    function resizeImage($imagePath, $requiredSize) {
        // dd($imagePath);
        $image = Image::make($imagePath);
        
        $width = $image->width();
        $height = $image->height();
    
        // Check if image resize is required or not
        if ($requiredSize >= $width && $requiredSize >= $height) return $imagePath;
    
        $newWidth = 1;
        $newHeight =1;
    
        $aspectRatio = $width/$height;
        if ($aspectRatio >= 1.0) {
            $newWidth = $requiredSize;
            $newHeight = $requiredSize / $aspectRatio;
        } else {
            $newWidth = $requiredSize * $aspectRatio;
            $newHeight = $requiredSize;
        }
        $image->resize($newWidth, $newHeight);
        $name = basename($imagePath);
        $path = str_replace($name,'',$imagePath);
        $thumbFile = $path."/{$width}_{$height}_{$name}";
        $img = $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbFile);
    }
}
