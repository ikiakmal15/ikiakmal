<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>
<body>
  <div>
    <div class="container mx-auto p-4">
      
      <!-- Header -->
      <div class="w-full mb-4">
        <?php include "header.php"; ?>
      </div>

      <!-- Navbar -->
      <div class="navbar w-full mb-4">
        <?php include "menu.php"; ?>
      </div>

      <!-- Main Content -->
      <div class="grid grid-cols-4 gap-4">
        
        <!-- Main Content Section -->
        <div class="col-span-3 bg-white p-6 shadow rounded">
          <?php 
          $req = isset($_REQUEST['hal']) ? $_REQUEST['hal'] : null;

          if (!empty($req)) {
            include_once $req . '.php';
          } else {
            include_once 'home.php';
          }
          ?>
        </div>

        <!-- Sidebar -->
        <div class="col-span-1 bg-white p-6 shadow rounded">
          <?php include "sidebar.php"; ?>
        </div>
      </div>

      <!-- content -->
          <div class="col-span-1 bg-white p-6 shadow rounded">
            <?php include "content.php"; ?>
            
      <!-- Footer -->
      <div class="footer w-full mt-4">
        <?php include "footer.php"; ?>
      </div>
      
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>
