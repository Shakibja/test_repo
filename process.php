<?php
if (isset($_FILES['profile_image'])) {
    $file = $_FILES['profile_image'];

    // get filename with extension
    $filenamewithextension = $file['name'];

    // get filename without extension
    $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

    // get file extension
    $extension = pathinfo($filenamewithextension, PATHINFO_EXTENSION);

    // filename to store
    $filenametostore = $filename . '_' . uniqid() . '.' . $extension;

    // store original image
    move_uploaded_file($file['tmp_name'], 'uploads/' . $filenametostore);

    // copy original image for cropping
    copy('uploads/' . $filenametostore, 'uploads/crop/' . $filenametostore);

    // Crop image here
    $cropimage = 'uploads/crop/' . $filenametostore;
    $img = imagecrop(imagecreatefromjpeg($cropimage), ['x1' => $_POST['bottom'], 'y1' => $_POST['top'], 'width' => $_POST['width'], 'height' => $_POST['height']]);
    imagejpeg($img, $cropimage);

    // you can save the below image path in database
    $path = 'uploads/crop/' . $filenametostore;

    // Redirect with success message and path to cropped image
    header('Location: image.php?success=Image cropped successfully.&path=' . $path);
    exit;
}
?>
