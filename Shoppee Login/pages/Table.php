<?php include '../Connection/table/Table.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table</title>
    <link rel="stylesheet" href="../css/Table.css">
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <h2>Admin Table</h2>

        <div class="form-container">
            <form id="table" action="../Connection/table/Table.php" method="POST">
                <div class="form-grid">
                    <input type="hidden" id="selectedId" name="selectedId" value="">

                    <div>
                        <label for="productName">Product Name:</label>
                        <input type="text" id="productName" name="productName" required>
                    </div>
                    <div>
                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" required>
                    </div>
                    <div>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" required>
                    </div>
                    <div>
                        <label for="dateArrived">Date Arrived:</label>
                        <input type="date" id="dateArrived" name="dateArrived" required>
                    </div>
                    <div>
                        <label for="endOfSupport">End Of Support:</label>
                        <input type="date" id="endOfSupport" name="endOfSupport" required>
                    </div>
                </div>

                <div class="buttons">

                    <button type="submit" name="addProduct">Add</button>
                    <button type="button" id="updateProductBtn">Update</button>
                    <button type="button" id="deleteProductBtn">Delete</button>

                    <button type="reset">Clear</button>
                    <a href="./index.php">Logout</a>

                    <!--Icon Theme Toggle-->
                    <a href="#" id="theme-toggle">
                        <i class="bx bx-sun" id="moon-icon">☀️</i>
                        <i class="bx bx-moon" id="sun-icon" style="display:none;">🌙</i>
                    </a>
                    
                    
                </div>
            </form>
        </div>

        <div class="table-container">
            <table id="productTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Date Arrived</th>
                        <th>End Of Support</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['product'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['dateArrived'] . "</td>";
        echo "<td>" . $row['endOfSupport'] . "</td>";
        echo "<td class='actions'><button type='button' class='select-btn'>Select</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No products found</td></tr>";
}
?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        const table = document.getElementById('productTable');
        const updateProductBtn = document.getElementById('updateProductBtn');
        const deleteProductBtn = document.getElementById('deleteProductBtn');

        let selectedRowId = null;

        //select product function

        table.addEventListener('click', function(e) {
            const row = e.target.closest('tr');
            if (row && row.rowIndex !== 0 && e.target.classList.contains('select-btn')) {
                selectedRowId = row.cells[0].innerText;
                document.getElementById('productName').value = row.cells[1].innerText;
                document.getElementById('price').value = row.cells[2].innerText;
                document.getElementById('quantity').value = row.cells[3].innerText;
                document.getElementById('dateArrived').value = row.cells[4].innerText;
                document.getElementById('endOfSupport').value = row.cells[5].innerText;
            }
        });

        //update function 

        updateProductBtn.addEventListener('click', function() {
            if (selectedRowId) {
                if (confirm('Are you sure you want to update this product?')) {
                    document.getElementById('selectedId').value = selectedRowId;
                    const actionInput = document.createElement('input');
                    actionInput.type = 'hidden';
                    actionInput.name = 'action';
                    actionInput.value = 'update';
                    document.getElementById('table').appendChild(actionInput);
                    document.getElementById('table').submit();
                }
            } else {
                alert('Please select a product to update.');
            }
        });

        //delete product function

        deleteProductBtn.addEventListener('click', function() {
            if (selectedRowId) {
                if (confirm('Are you sure you want to delete this product? This action cannot be undone.')) {
                    document.getElementById('selectedId').value = selectedRowId;
                    const actionInput = document.createElement('input');
                    actionInput.type = 'hidden';
                    actionInput.name = 'action';
                    actionInput.value = 'delete';
                    document.getElementById('table').appendChild(actionInput);
                    document.getElementById('table').submit();
                }
            } else {
                alert('Please select a product to delete.');
            }
        });
    </script>
    <script src="../JS/darkmode.js"></script>

</body>

</html>