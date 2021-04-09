<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/show.css">
    <title>PHP | Products</title>
</head>
<body>
    <section>
        <div>
            <h2>Product <?= $get_data["id"] ?></h2>
            <p class="label">Name:</p> 
            <p><?= $get_data["name"] ?></p>
            <p class="label">Description:</p>
            <p><?= $get_data["description"] ?></p>
            <p class="label">Price:</p>
            <p>Php <?= $get_data["price"] ?></p>
        </div>
        <div>
            <a href="<?= base_url() ?>products/edit/<?= $get_data["id"] ?>" class="edit">Edit</a>
            <a href="<?= base_url() ?>">Back</a>
        </div>
    </section>
</body>
</html>