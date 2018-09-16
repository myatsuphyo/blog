<?php
    // Checks if the form was submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Checks if a file was uploaded without errors
        if(isset($_FILES['photo'])
            && is_uploaded_file($_FILES['photo']['tmp_name'])
            && $_FILES['photo']['error']==UPLOAD_ERR_OK) {
            // Checks if the file is a JPG image
                if($_FILES['photo']['type']=='image/jpeg') {
                    $tmp_img = $_FILES['photo']['tmp_name'];
                    // Creates an image resource
                    $image = imagecreatefromjpeg($tmp_img);
                    // Tells the browser what type of file
                    header('Content-Type: image/jpeg');
                    // Outputs the file to the browser
                    imagejpeg($image, '', 90);
                    // Frees the memory used for the file
                    imagedestroy($image);
                } else {
                    echo "Uploaded file was not a JPG image.";
                }
                } else {
                    echo "No photo uploaded!";
                }
                } else {
                    // If the form was not submitted, displays the form HTML
?>

<form action="file_post.php" method="post" enctype="multipart/form-data">
    <label for="photo">User Photo:</label>
    <input type="file" name="photo" />
    <input type="submit" value="Upload a Photo" />
    </form>
<?php } // End else statement ?>