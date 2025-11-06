<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout | MBOZOKAMANE</title>
  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(180deg, #dbeafe 0%, #ffffff 100%);
    }

    .logout-container {
      background: white;
      padding: 40px 50px;
      border-radius: 15px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 320px;
    }

    h2 {
      color: #1e3a8a;
      margin-bottom: 20px;
    }

    button {
      padding: 10px 20px;
      background-color: #3b82f6;
      color: white;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
      font-size: 15px;
    }

    button:hover {
      background-color: #2563eb;
    }
  </style>
</head>
<body>
  <div class="logout-container">
    <h2>Anda telah logout</h2>
    <p>Sesi Anda telah berakhir.</p>
    <button onclick="window.location.href='login.html'">Kembali ke Login</button>
  </div>

  <script>
    // Hapus data "session" yang disimpan di localStorage
    localStorage.removeItem("username");
    // Bisa juga pakai localStorage.clear() kalau ada data lain
    console.log("User logged out");
  </script>
</body>
</html>
