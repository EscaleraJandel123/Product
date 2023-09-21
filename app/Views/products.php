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
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        select {
            width: 93%;

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
        }

        .action-buttons {
            text-align: center;
        }
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
        <table>
            <tr>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Category</th>
                <th>Product Quantity</th>
                <th>Product Price</th>
                <th>Action</th>
            </tr>
            <?php foreach ($product as $pr): ?>
                <tr>
                    <td>
                        <?= $pr['productName'] ?>
                    </td>
                    <td>
                        <?= $pr['productDescription'] ?>
                    </td>
                    <td>
                        <?= $pr['productCategory'] ?>
                    </td>
                    <td>
                        <?= $pr['productQuantity'] ?>
                    </td>
                    <td>
                        <?= $pr['productPrice'] ?>
                    </td>
                    <td class="action-buttons">
                        <a href="/delete/<?= $pr['id'] ?>">Delete</a>
                        <a href="/edit/<?= $pr['id'] ?>">Edit</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>