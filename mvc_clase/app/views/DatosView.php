<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Home' ?></title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        form { margin-bottom: 20px; }
        input { margin-right: 10px; padding: 5px; }
        button { padding: 5px 10px; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 5px; }
        a { margin-left: 10px; text-decoration: none; color: blue; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1><?= $title ?></h1>
    <h2>Agregar nuevo estudiante</h2>
<form method="post" action="/mvc_clase/public/Datos">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit" name="agregar">Agregar</button>
</form>

    <!-- Lista de estudiantes -->
    <h2>Lista de estudiantes</h2>
    <ul>
        <?php if(!empty($estudiantes)): ?>
            <?php foreach($estudiantes as $est): ?>
                <li>
                    <?= htmlspecialchars($est['nombre']) ?> - <?= htmlspecialchars($est['email']) ?>
                    <a href="/mvc_clase/public/Datos/delete/<?= $est['id'] ?>" onclick="return confirm('¿Eliminar este estudiante?')">Eliminar</a>
                </li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay estudiantes</li>
        <?php endif; ?>
    </ul>
</body>
</html>
