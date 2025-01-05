<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Top-Up System</title>
  <style>
    /* General Styles */
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.8); /* Transparent background */
      color: #fff;
    }

    /* Container Styling */
    .container {
      background: rgba(255, 255, 255, 0.1); /* Semi-transparent box */
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
      padding: 20px;
      width: 90%;
      max-width: 400px;
      text-align: center;
      backdrop-filter: blur(10px); /* Glassmorphism effect */
    }

    h1 {
      font-size: 2rem;
      color: #4CAF50;
      margin-bottom: 20px;
    }

    .user-card {
      margin: 20px 0;
      padding: 15px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.2);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    .user-card h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
    }

    .user-card p {
      font-size: 1.2rem;
      margin-bottom: 15px;
    }

    .user-card input {
      width: calc(100% - 20px);
      padding: 10px;
      margin-bottom: 15px;
      font-size: 1rem;
      border-radius: 25px;
      border: none;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      outline: none;
      background: rgba(255, 255, 255, 0.3);
      color: #fff;
      text-align: center;
    }

    .user-card input::placeholder {
      color: #ddd;
    }

    .user-card button {
      padding: 10px 20px;
      font-size: 1rem;
      color: white;
      background: linear-gradient(45deg, #4CAF50, #2E7D32);
      border: none;
      border-radius: 25px;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
      transition: all 0.3s ease;
    }

    .user-card button:hover {
      background: linear-gradient(45deg, #2E7D32, #4CAF50);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.4);
    }

    .user-card button:active {
      transform: translateY(0);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    /* Responsive */
    @media (max-width: 600px) {
      h1 {
        font-size: 1.5rem;
      }
      .user-card h3 {
        font-size: 1.2rem;
      }
      .user-card input, .user-card button {
        font-size: 0.9rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Top-Up System</h1>
    
    <!-- User Card -->
    <div class="user-card" id="user-1">
      <h1>Masukan Username anda</h1>
      <input type="text" id="topup-1" placeholder="Masukan Username anda">
      <p>Masukan jumlah topup: <span id="balance-1">Minimal 10000</span></p>
      <input type="number" id="topup-1" placeholder="Enter top-up amount">
      <button onclick="topUp(1)">Top-Up</button>
    </div>

  <script>
    // Data awal pengguna
    let users = [
      { id: 1, name: "", balance: 10000 },
    ];

    // Fungsi untuk melakukan top-up
    function topUp(userId) {
      const inputField = document.getElementById(`topup-${userId}`);
      const amount = parseFloat(inputField.value);

      if (isNaN(amount) || amount <= 10000) {
        alert("Invalid top-up amount. Please enter a valid number greater than zero.");
        return;
      }

      const user = users.find(u => u.id === userId);
      if (!user) {
        alert("User not found.");
        return;
      }

      user.balance += amount; // Tambahkan saldo
      document.getElementById(`balance-${userId}`).textContent = user.balance; // Perbarui tampilan saldo
      inputField.value = ""; // Kosongkan input setelah top-up
      alert(`Top-up successful! ${amount} has been added to ${user.name}'s account.`);
    }
  </script>
</body>
</html>
