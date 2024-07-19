<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .sidebar h4 {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 15px;
            display: block;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #dee2e6;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        .cards {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .card {
            flex: 1;
            background-color: #fff;
            padding: 20px;
            margin-right: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card:last-child {
            margin-right: 0;
        }

        .card h5 {
            margin: 0 0 10px;
            font-size: 24px;
        }

        .card p {
            margin: 0;
            font-size: 16px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f8f9fa;
        }

        .action-buttons {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 20px;
        }

        .action-buttons button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            margin-right: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .action-buttons button:hover {
            background-color: #0056b3;
        }

        .edit-button {
            background-color: #ffc107;
            color: #fff;
        }

        .edit-button:hover {
            background-color: #e0a800;
        }

        .delete-button {
            background-color: #dc3545;
            color: #fff;
        }

        .delete-button:hover {
            background-color: #c82333;
        }
        .dropdown-btn {
            background: none;
            border: none;
            color: white;
            text-align: left;
            width: 100%;
            padding: 15px;
            font-size: 16px;
            cursor: pointer;
        }

        .dropdown-btn:hover {
            background-color: #495057;
        }

        .dropdown-container {
            display: none;
            background-color: #495057;
            padding-left: 20px;
        }

        .dropdown-container a {
            padding: 10px 15px;
            display: block;
            color: #fff;
            text-decoration: none;
        }

        .dropdown-container a:hover {
            background-color: #6c757d;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h4>Restaurant Dashboard</h4>
            <a href="#home">Home</a>
            <button class="dropdown-btn" onclick="toggleDropdown('categoryDropdown')">Category</button>
            <div class="dropdown-container" id="categoryDropdown">
                <a href="#category1">Category 1</a>
                <a href="#category2">Category 2</a>
                <a href="#category3">Category 3</a>
            </div>
            <button class="dropdown-btn" onclick="toggleDropdown('mealDropdown')">Meal</button>
            <div class="dropdown-container" id="mealDropdown">
                <a href="#meal1">Meal 1</a>
                <a href="#meal2">Meal 2</a>
                <a href="#meal3">Meal 3</a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Dashboard</h1>
            </div>



            <!-- Action Buttons -->
            <div class="action-buttons">
                <button onclick="alert('Create action')">Create</button>
            </div>

            <!-- Orders Table -->
            <h2>Recent Orders</h2>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pizza</td>

                        <td>
                            <button class="edit-button" onclick="alert('Edit action for item 1')">Edit</button>
                            <button class="delete-button" onclick="alert('Delete action for item 1')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Pasta</td>
                        <td>
                            <button class="edit-button" onclick="alert('Edit action for item 2')">Edit</button>
                            <button class="delete-button" onclick="alert('Delete action for item 2')">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Burger</td>
                        <td>
                            <button class="edit-button" onclick="alert('Edit action for item 3')">Edit</button>
                            <button class="delete-button" onclick="alert('Delete action for item 3')">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            if (dropdown.style.display === "block") {
                dropdown.style.display = "none";
            } else {
                dropdown.style.display = "block";
            }
        }
    </script>
</body>


</html>