<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'Home' ?></title>
</head>
<body>
    <h1><?= $title ?></h1>

    <ul>
        <?php if (!empty($info)): ?>
            <?php foreach ($info as $user): ?>
                <li><?= htmlspecialchars($user['nombre']) ?> - <?= htmlspecialchars($user['email']) ?></li>
            <?php endforeach; ?>
        <?php else: ?>
            <li>No hay usuarios en la base de datos</li>
        <?php endif; ?>
    </ul>
</body>
</html>
