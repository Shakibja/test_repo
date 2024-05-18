<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/imgareaselect.css">
</head>
<body>
  
    <form id="imageForm" method="post" enctype="multipart/form-data" action="process.php">
        <p>Image: <input type="file" name="profile_image" class="image" required /></p>
        <input type="text" name="x1" value="" />
        <input type="text" name="y1" value="" />
        <input type="text" name="w" value="" />
        <input type="text" name="h" value="" />
        <input type="text" name="top" value="" />
        <input type="text" name="bottom" value="" />
        <input type="text" name="height" value="" />
        <input type="text" name="width" value="" />
        <p><img id="previewimage" style="display:none;height: 800px;"/></p>
        <button type="submit" name="submit">Submit</button>
    </form>
    
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/jquery.imgareaselect.js"></script>

    <script>
        jQuery(function($) {
            var p = $("#previewimage");
     
            $("body").on("change", ".image", function(){
                var imageReader = new FileReader();
                imageReader.readAsDataURL(document.querySelector(".image").files[0]);
     
                imageReader.onload = function (oFREvent) {
                    p.attr('src', oFREvent.target.result).fadeIn();
                };
            });
     
            $('#previewimage').imgAreaSelect({
                onSelectEnd: function (img, selection) {
                    $('input[name="x1"]').val(selection.x1);
                    $('input[name="y1"]').val(selection.y1);
                    $('input[name="w"]').val(selection.width);
                    $('input[name="h"]').val(selection.height);
                    $('input[name="top"]').val(selection.y1);
                    $('input[name="bottom"]').val(selection.y2);
                    $('input[name="height"]').val(selection.height);
                    $('input[name="width"]').val(selection.width);          
                }
            });
        });
    </script>
</body>
</html>
