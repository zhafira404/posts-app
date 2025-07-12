<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Posts</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Poppins dari Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #fce7f3, #fbcfe8, #f9a8d4);
      background-attachment: fixed;
    }
    .glass {
      backdrop-filter: blur(16px) saturate(180%);
      -webkit-backdrop-filter: blur(16px) saturate(180%);
      background-color: rgba(255, 255, 255, 0.65);
      border-radius: 16px;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
  </style>
</head>

<body class="min-h-screen flex items-center justify-center px-4 py-10">
  <div class="glass shadow-2xl p-8 w-full max-w-2xl animate-fade-in">
    <h1 class="text-4xl font-bold mb-6 text-center text-pink-600 drop-shadow-md tracking-wide">
      🌸 Aplikasi Pengelola Post 🌸
    </h1>
    @yield('content')
  </div>

  <!-- Animasi Fade-in -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          animation: {
            'fade-in': 'fadeIn 0.8s ease-out',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: 0, transform: 'translateY(20px)' },
              '100%': { opacity: 1, transform: 'translateY(0)' },
            },
          }
        }
      }
    }
  </script>
</body>
</html>
