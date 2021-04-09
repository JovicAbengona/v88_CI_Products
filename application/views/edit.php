<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/edit.css">
    <title>PHP | Products</title>
</head>
<body>
    <section>
        <form action="<?= base_url() ?>update/<?= $get_data["id"] ?>" method="POST">
            <h2>Product <?= $get_data["id"] ?></h2>
            <label>Name: <input type="text" name="name" id="name" value="<?= $get_data["name"] ?>"></label>
<?php if($this->session->userdata("error_name") != NULL){ echo "".$this->session->userdata("error_name").""; $this->session->unset_userdata("error_name");}?>
            <label>Description: <input type="text" name="description" id="description" value="<?= $get_data["description"] ?>"></label>
<?php if($this->session->userdata("error_description") != NULL){ echo "".$this->session->userdata("error_description").""; $this->session->unset_userdata("error_description");}?>
            <label>Price: <input type="text" name="price" id="price" value="<?= $get_data["price"] ?>"></label>
<?php if($this->session->userdata("error_price") != NULL){ echo "".$this->session->userdata("error_price").""; $this->session->unset_userdata("error_price");}?>
            <input type="submit" class="update" value="Update">
            <a href="<?= base_url() ?>">Back</a>
<?php if($this->session->userdata("message") != NULL){ echo "<p class='message'>".$this->session->userdata("message")."</p>"; $this->session->unset_userdata("message");}?>
        </form>
    </section>
</body>
</html>