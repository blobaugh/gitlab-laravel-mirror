<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fancy Hello World</title>
    <!-- Include Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <!-- Include Tailwind CSS from CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: linear-gradient(135deg, #ff7eb3, #ff758c);
            font-family: 'Poppins', sans-serif;
        }
        .fade-in {
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div class="text-center fade-in">
        <h1 class="text-6xl font-extrabold text-white mb-4">Hello, World!</h1>
        <p class="text-xl text-white mb-6">Welcome to your fancy web page.</p>
        <img
            src="https://images.pexels.com/photos/414612/pexels-photo-414612.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300&w=400"
            alt="Beautiful Nature"
            class="rounded-xl shadow-lg mb-6 mx-auto"
        >
        <a
            href="#"
            class="bg-white text-pink-500 font-semibold px-6 py-3 rounded-full shadow hover:bg-pink-500 hover:text-white transition-all duration-300"
        >
            Click Me!
        </a>
    </div>
</body>
</html>
