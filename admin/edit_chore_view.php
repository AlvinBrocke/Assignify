<?php
include "../settings/core.php";
include "../action/get_a_chore_action.php";
checkLogin();
checkUserRole();

if (isset($_GET['cid'])) {
    // Get the chore ID from the URL
    $ret_var = $_GET['cid'];

    // Get the chore details from the database
    $ret_chore = getAChore($ret_var);

} else {
    // If the request method is not GET, redirect to the admin home page
    header("Location: ../admin/admin-choremanagement.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="../styles/fontawesome/css/all.css">
    <title>Edit Chore</title>
</head>

<body>
    <div class='add-chore-background'>
        <div class='add-chore-container'>
            <form action='../action/edit_a_chore_action.php' method='POST' name='edit-chore-form' id='edit-chore-form'>
                <div class='add-chore'>
                    <h2>Edit a Chore</h2>
                </div>

                <label for="chore_id">Chore Name:</label><br>
                <input type="hidden" id="chore_id" name="chore_id" required value="<?php echo $ret_chore['cid']; ?>">
                <input type="text" id="chorename" name="chorename" required
                    value="<?php echo $ret_chore['chorename']; ?>">


                <button type="submit" id="editBtn" name="editBtn">Edit Chore</button>
            </form>
        </div>
    </div>
</body>

</html>