<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Velvet Vogue Dashboard</title>
  <style>
    body { font-family: Arial, sans-serif; background: #fff; color: #111; }
    .card { background: #f4f4f4; padding: 20px; margin: 20px; border-radius: 8px; display: inline-block; }
    .card h3 { margin: 0; font-size: 18px; }
    .card p { font-size: 22px; font-weight: bold; color: #cfa65e; }
  </style>
</head>
<body>
  <h1>Velvet Vogue Admin Dashboard</h1>

  <div class="card">
    <h3>Total Orders</h3>
    <p>
      <?php
        $sql = "SELECT COUNT(*) AS total_orders FROM orders";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['total_orders'];
      ?>
    </p>
  </div>

  <div class="card">
    <h3>Total Sales</h3>
    <p>
      <?php
        $sql = "SELECT SUM(total) AS total_sales FROM orders";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo "$" . number_format($row['total_sales'], 2);
      ?>
    </p>
  </div>

</body>
</html>
