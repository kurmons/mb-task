<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container profile">
    <h2 class="main-heading">Add profile info</h2>
    <img class="icon" src="<?php echo URLROOT; ?>img/logo.png" alt="logo">
    <hr class="blue-line">
    <form action="<?php echo URLROOT; ?>profiles/add" method="post">
        <label>Attribute</label>
        <input type="text" name="attribute">
        <span class="error-msg"><?php echo $data['attributeError']; ?></span>
        <label name="value">Value</label>
        <input type="text" name="value">
        <span class="error-msg"><?php echo $data['valueError']; ?></span>
        <button name="add" type="submit" class="overlay-button">Add Info</button>
    </form>
    <div class="options">
        <a href="<?php echo URLROOT; ?>profiles">Back</a>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php';
