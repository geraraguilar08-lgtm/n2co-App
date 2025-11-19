<?php
// Configuración de la zona horaria
date_default_timezone_set('America/El_Salvador');

// Variables dinámicas
$pageTitle = "Bienvenido a mi Aplicación PHP";
$currentDate = date("l, F j, Y");
$currentTime = date("h:i:s A");
$username = "Usuario Invitado"; // En una app real, esto vendría de una sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Carga de Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Fuente Inter para estética moderna */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Gray-50 */
        }
    </style>
</head>
<body class="min-h-screen flex items-start justify-center p-8">

    <div class="w-full max-w-xl bg-white p-8 rounded-xl shadow-2xl border-t-8 border-indigo-600">
        
        <header class="pb-4 mb-6 border-b border-gray-200">
            <h1 class="text-4xl font-extrabold text-indigo-700 mb-2">
                <?php echo $pageTitle; ?>
            </h1>
            <p class="text-xl text-gray-600">
                Hola, <span class="font-bold text-gray-800"><?php echo $username; ?></span>!
            </p>
        </header>

        <section class="space-y-6">
            <div class="p-4 bg-indigo-50 rounded-lg border border-indigo-200">
                <h2 class="text-lg font-semibold text-indigo-800 mb-2">Información Dinámica del Servidor</h2>
                
                <!-- Demostración de PHP incrustado -->
                <p class="flex justify-between text-gray-700">
                    <span class="font-medium">Fecha de Hoy:</span>
                    <span class="font-mono bg-indigo-100 px-2 py-1 rounded text-sm"><?php echo $currentDate; ?></span>
                </p>
                <p class="flex justify-between text-gray-700 mt-2">
                    <span class="font-medium">Hora Actual:</span>
                    <span class="font-mono bg-indigo-100 px-2 py-1 rounded text-sm"><?php echo $currentTime; ?></span>
                </p>
            </div>
            
            <p class="text-gray-700">
                Este es un archivo `index.php` simple. El código PHP (`<?php ... ?>`) se ejecuta en el servidor (o en el entorno de simulación) y genera el HTML final que ves en el navegador.
            </p>

            <footer class="pt-4 border-t border-gray-200 text-center text-sm text-gray-500">
                &copy; <?php echo date("Y"); ?> Aplicación PHP. Todos los derechos reservados.
            </footer>
        </section>
    </div>

</body>
</html>
