<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .container {
            max-width: 1500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"] {
            width: 98%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        select {
            width: 98%;

            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
        }

        a {
            text-decoration: none;
            color: #333;
            margin-right: 10px;
            background-color: ;
        }
        .btn{
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .red {background-color: #f44336;} /* Red */ 
    </style>
</head>

<body>
    <header>
        <h1>Product Management</h1>
    </header>
    <div class="container">
        <form action="/save" method="post">
            <label for="productName">Product Name:</label><br>
            <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
            <input type="text" name="productName" placeholder="Enter Product Name"
                value="<?= isset($pro['productName']) ? $pro['productName'] : '' ?>"><br>

            <label for="productDescription">Product Description:</label><br>
            <input type="text" name="productDescription" placeholder="Enter Product Description"
                value="<?= isset($pro['productDescription']) ? $pro['productDescription'] : '' ?>"><br>

            <label for="productCategory">Product Category:</label><br>
            <select name="productCategory">
                <option value="">Select a category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= $category ?>">
                        <?= $category ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label for="productQuantity">Product Quantity:</label><br>
            <input type="number" name="productQuantity" placeholder="Enter Product Quantity"
                value="<?= isset($pro['productQuantity']) ? $pro['productQuantity'] : '' ?>"><br>

            <label for="productPrice">Product Price:</label><br>
            <input type="text" name="productPrice" placeholder="Enter Product Price"
                value="<?= isset($pro['productPrice']) ? $pro['productPrice'] : '' ?>"><br>

            <input type="submit" value="Save">
        </form>
        <h2>Product Listing</h2>
        <?php foreach ($product as $pr): ?>
            <ul>
                <li><strong>Product Name:</strong>
                    <?= $pr['productName'] ?>
                </li>
                <li><strong>Product Description:</strong>
                    <?= $pr['productDescription'] ?>
                </li>
                <li><strong>Product Category:</strong>
                    <?= $pr['productCategory'] ?>
                </li>
                <li><strong>Product Quantity:</strong>
                    <?= $pr['productQuantity'] ?>
                </li>
                <li><strong>Product Price:</strong>
                    <?= $pr['productPrice'] ?>
                </li>
                <a href="/delete/<?= $pr['id'] ?>" class="btn red">Delete</a>
                <a href="/edit/<?= $pr['id'] ?>" class="btn green">Edit</a>

            </ul>
        <?php endforeach ?>

    </div>
</body>

</html>