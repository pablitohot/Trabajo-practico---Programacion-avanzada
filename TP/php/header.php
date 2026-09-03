<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($tituloPagina)) {
    $tituloPagina = 'MichiMarket';
}
$paginaActual = basename($_SERVER['PHP_SELF']);
$sesionIniciada = isset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($tituloPagina); ?></title>
  <link rel="icon" href="img/logo.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600;700&family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-michi">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
          <img src="img/logo.png" alt="Logo MichiMarket" width="46" height="46" class="logo-michi">
          <span>MichiMarket</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Abrir menú">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menuPrincipal">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link <?php echo $paginaActual === 'index.php' ? 'active' : ''; ?>" href="index.php">Catálogo</a>
            </li>
          </ul>
          <div class="d-flex align-items-center gap-2">
            <?php if ($sesionIniciada): ?>
              <span class="usuario-sesion"><?php echo htmlspecialchars($_SESSION['usuario']); ?></span>
              <a href="logout.php" class="btn btn-michi-outline btn-sm">Salir</a>
            <?php elseif ($paginaActual !== 'login.php'): ?>
              <a href="login.php" class="btn btn-michi btn-sm">Ingresar</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
