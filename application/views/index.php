<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>static/style.css">
    <title>PHP | Products</title>
</head>
<body>
    <section>
        <h3>Products</h3>
        <a href="new" class="add">Add New Product</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                if(count($form_data) > 0){
                    foreach($form_data AS $data){
            ?>
                        <tr>
                            <td class="name"><?= $data["name"] ?></td>
                            <td><?= $data["description"] ?></td>
                            <td class="price">Php <?= $data["price"] ?></td>
                            <td class="action">
                                <a href="products/show/<?= $data["id"] ?>" class="show">Show</a>
                                <a href="products/edit/<?= $data["id"] ?>" class="edit">Edit</a>
                                <a href="products/remove/<?= $data["id"] ?>" class="remove">Remove</a>
                            </td>
                        </tr>
            <?php
                    }
                }
                else{
            ?>
                    <tr>
                        <td colspan="4">No Data Found</td>
                    </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </section>
</body>
</html>