<?php 
    // Create a path string for a new folder to contain the uploaded file.
    // Eg. actual_curr_dir/model/images
    // You can change 'images' to another name if the folder is supposed to contain TXT or CSV files
    $new_dir_path = getcwd() . DIRECTORY_SEPARATOR . 'model'. DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;

    // Make that new directory
    mkdir($new_dir_path, 0777, true);

    echo "Newly created path string: $new_dir_path\n";

    $_FILES['file_name_prop']['name'] = 'orig_file_name';
    $_FILES['file_name_prop']['tmp_name'] = 'tmp_file_name';

    // Attach the filename to the folder just created. 
    // Eg.  actual_curr_dir/model/images/file_name
    $new_file_path = $path . DIRECTORY_SEPARATOR . $_FILES['file_name_prop']['name'];

    echo "File name with path: $new_file_path\n";


    // Get the path to the file uploaded by the user
    $file_loc = $_FILES['file_name_prop']['tmp_name'];

    echo "File is currently in: $file_loc\n";


    // Move the uploaded file from the current file location to the new folder, and create 
    $success = move_uploaded_file($file_loc, $new_file_path);

    if ($success) {
        $upload_message = $new_file_path . ' has been uploaded and moved.';
    }

?>