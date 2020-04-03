<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container profile">
    <h2 class="main-heading">Edit profile info</h2>
    <img class="icon" src="<?php echo URLROOT; ?>img/logo.png" alt="logo">
    <hr class="blue-line">
    <form action="<?php echo URLROOT; ?>profiles/edit/<?php echo $data['id']; ?>" method="post">
        <label>Attribute</label>
        <input type="text" name="attribute" value="<?php echo $data['attribute']; ?>">
        <span class="error-msg"><?php echo $data['attributeError']; ?></span>
        <label name="value">Value</label>
        <input type="text" name="value" value="<?php echo $data['value']; ?>">
        <span class="error-msg"><?php echo $data['valueError']; ?></span>
        <button name="edit" type="submit" class="overlay-button">Edit Info</button>
        <button type="submit" class="overlay-button delete-button" formaction="<?php echo URLROOT; ?>profiles/delete/<?php echo $data['id']; ?>">Delete</button>
    </form>
    <div class=" options">
        <a href="<?php echo URLROOT; ?>profiles">Back</a>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php';
