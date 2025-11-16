<?php 
// include 'db2.php'; 
?> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Velvet Vogue Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      background: #f5f5f5;
    }
    /* Sidebar */
    .sidebar {
      width: 200px;
      background: #111;
      color: white;
      min-height: 100vh;
      padding: 20px;
    }
    .sidebar h2 {
      margin-bottom: 30px;
      text-align: center;
      color: #f5f5f5;
    }
    .sidebar a {
      display: block;
      color: white;
      text-decoration: none;
      margin: 15px 0;
      padding: 10px;
      border-radius: 5px;
    }
    .sidebar a:hover {
      background: #f5f5f5;
      color: #111;
    }

    /* Main Content */
    .main {
      flex: 1;
      padding: 20px;
    }
    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .cards {
      display: flex;
      gap: 20px;
      margin-top: 20px;
    }
    .card {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      flex: 1;
      text-align: center;
    }
    .card h3 {
      margin-bottom: 10px;
      color: #555;
    }
    .card p {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
    }

    /* Table */
    table {
      width: 100%;
      margin-top: 30px;
      border-collapse: collapse;
      background: white;
      border-radius: 8px;
      overflow: hidden;
    }
    th, td {
      padding: 12px;
      text-align: left;
    }
    th {
      background: black;
      color: white;
    }
    tr:nth-child(even) {
      background: #f2f2f2;
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <h2>Velvet Vogue</h2>
    <a href="#">Home</a>
    <a href="#">Orders</a>
    <a href="#">Products</a>
    <a href="#">Customers</a>
    <a href="#">Settings</a>
  </div>

  <div class="main">
    <div class="top-bar">
      <h1>Dashboard</h1>
      <p>Welcome, Admin</p>
    </div>

    <!-- Cards -->
    <div class="cards">
      <div class="card">
        <h3>Total Sales</h3>
        <p>Rs 1,234,567</p> <!-- Hardcoded total -->
      </div>
      <div class="card">
        <h3>Total Orders</h3>
        <p>123</p> <!-- Hardcoded orders count -->
      </div>
      <div class="card">
        <h3>Total Customers</h3>
        <p>45</p> <!-- Hardcoded customers count -->
      </div>
    </div>

    <!-- Orders Table -->
    <table>
      <thead>
        <tr>
          <th>Order ID</th>
          <th>Customer Name</th>
          <th>Amount</th>
          <th>Status</th>
          <th>Order Date</th>
        </tr>
      </thead>
      <tbody>
        <!-- 
        <?php
        // PHP fetching orders from DB commented out
        // $sql = "SELECT * FROM orders1 ORDER BY order_date DESC";
        // $result = $conn->query($sql);
        // if ($result->num_rows > 0) {
        //   while($row = $result->fetch_assoc()) {
        //     echo "<tr>
        //       <td>{$row['order_id']}</td>
        //       <td>{$row['customer_name']}</td>
        //       <td>Rs " . number_format($row['amount'], 0) . "</td>
        //       <td>{$row['status']}</td>
        //       <td>{$row['order_date']}</td>
        //     </tr>";
        //   }
        // } else {
        //   echo "<tr><td colspan='5'>No orders found</td></tr>";
        // }
        ?>
        -->
        <!-- Hardcoded table rows -->
        <tr>
          <td>1001</td>
          <td>Jane Doe</td>
          <td>Rs 5,000</td>
          <td>Completed</td>
          <td>2025-09-01</td>
        </tr>
        <tr>
          <td>1002</td>
          <td>John Smith</td>
          <td>Rs 7,200</td>
          <td>Pending</td>
          <td>2025-09-03</td>
        </tr>
        <tr>
          <td>1003</td>
          <td>Emily Johnson</td>
          <td>Rs 3,750</td>
          <td>Shipped</td>
          <td>2025-09-05</td>
        </tr>
      </tbody>
    </table>

  </div>

</body>
</html>