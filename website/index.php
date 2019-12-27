<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        $result = file_get_contents('http://node-container:9001/products');
        $produtcs = json_decode($result);
    ?>

    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach( $produtcs as $product ) : ?>
            <tr>
                <td> <?= $product->name; ?> </td>
                <td> <?= $product->price; ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    
</body>
</html>