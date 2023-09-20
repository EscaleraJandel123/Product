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
            max-width: 800px;
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

        input[type="text"] {
            width: 95%;
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
            <label for="code">Code:</label><br>
            <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
            <input type="text" name="code" placeholder="Enter code"
                value="<?= isset($pro['code']) ? $pro['code'] : '' ?>"><br>

            <label for="name">Name:</label><br>
            <input type="text" name="name" placeholder="Enter name"
                value="<?= isset($pro['name']) ? $pro['name'] : '' ?>"><br>

            <label for="quantity">Quantity:</label><br>
            <input type="text" name="quantity" placeholder="Enter quantity"
                value="<?= isset($pro['quantity']) ? $pro['quantity'] : '' ?>"><br>

            <input type="submit" value="Save">
        </form>

        <h2>Product Listing</h2>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
            <?php foreach ($product as $pr): ?>
                <tr>
                    <td>
                        <?= $pr['code'] ?>
                    </td>
                    <td>
                        <?= $pr['name'] ?>
                    </td>
                    <td>
                        <?= $pr['quantity'] ?>
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