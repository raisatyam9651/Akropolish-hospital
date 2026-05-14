<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/vite.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $page_title ?? 'Akropolis Super Speciality Hospital | NABH Accredited Healthcare'; ?></title>
  <meta name="description" content="<?php echo $page_description ?? 'Akropolis Super Speciality Hospital - NABH accredited healthcare with 24/7 emergency services, expert doctors, and advanced medical facilities in Noida.'; ?>" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#328CCB',
            secondary: '#D66C43',
          }
        }
      }
    }
  </script>

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Custom Styles -->
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body class="min-h-screen bg-white">
  <div id="root">
