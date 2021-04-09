<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/new.css">
    <title>PHP | Products</title>
</head>
<body>
    <section>
        <form action="create" method="POST">
            <h2>Add a new product</h2>
            <label>Name: <input type="text" name="name" id="name" value="<?= $this->session->userdata('name')?>"></label>
<?php if($this->session->userdata("error_name") != NULL){ echo "".$this->session->userdata("error_name").""; $this->session->unset_userdata("error_name");}?>
            <label>Description: <input type="text" name="description" id="description" value="<?= $this->session->userdata('description')?>"></label>
<?php if($this->session->userdata("error_description") != NULL){ echo "".$this->session->userdata("error_description").""; $this->session->unset_userdata("error_description");}?>
            <label>Price: <input type="text" name="price" id="price" value="<?= $this->session->userdata('price')?>"></label>
<?php if($this->session->userdata("error_price") != NULL){ echo "".$this->session->userdata("error_price").""; $this->session->unset_userdata("error_price");}?>
            <input type="submit" class="create" value="Create">
            <a href="<?= base_url() ?>">Back</a>
        </form>
    </section>
</body>
</html>