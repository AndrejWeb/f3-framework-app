<?php include 'partials/header.php'; ?>
<?php include 'partials/menu.php'; ?>
    <div class="content">
        <h1><?php echo $page_title; ?></h1>
        <?php //echo "<pre>", print_r($customers), "</pre>";?>
        <table border="1" style="border: 1px solid; width: 100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($customers as $customer): ?>
                <tr>
                    <td><?php echo $customer["CustomerID"]; ?></td>
                    <td><?php echo $customer["CustomerName"]; ?></td>
                    <td><?php echo $customer["Address"]; ?></td>
                    <td><?php echo $customer["City"]; ?></td>
                    <td><?php echo $customer["PostalCode"]; ?></td>
                    <td><?php echo $customer["Country"]; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php include 'partials/footer.php'; ?>