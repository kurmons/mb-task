<?php require APPROOT . '/views/includes/header.php'; ?>

<div class="container profile">
    <h2 class="main-heading">Your profile</h2>
    <img class="icon" src="<?php echo URLROOT; ?>img/logo.png" alt="logo">
    <hr class="blue-line">
    <div class="options">
        <a href="<?php echo URLROOT; ?>profiles/add">Add Info</a>
    </div>
    <?php foreach ($data['attributes'] as $attribute) : ?>
        <div class="profile-info">
            <label class="attribute"><?php echo $attribute->attribute; ?>: </label>
            <label class="value"><?php echo $attribute->value; ?></label>
            <a href="<?php echo URLROOT; ?>profiles/edit/<?php echo $attribute->id; ?>">Edit</a>
        </div>
    <?php endforeach; ?>
    <div class="options">
        <a href="<?php echo URLROOT; ?>home/logout">Logout</a>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php';
