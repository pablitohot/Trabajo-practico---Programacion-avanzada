<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: login.php');
    exit();
}

$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) : '';
$password = isset($_POST['password']) ? trim($_POST['password']) : '';

$loginCorrecto = ($usuario === 'fcytuader' && $password === 'programacionavanzada');

if (!$loginCorrecto) {
    header('Location: login.php?error=1');
    exit();
}

$_SESSION['usuario'] = $usuario;
$tituloPagina = 'Ingreso correcto | MichiMarket';
require_once 'php/header.php';
?>
    <section class="mensaje-page">
      <div class="mensaje-card text-center">
        <img src="img/logo.png" alt="" width="72" height="72" class="mb-3 logo-michi">
        <h1 class="h3 mensaje-ok mb-3">ingreso correctamente</h1>
        <p class="text-muted">Ya podés explorar el marketplace de gatitos.</p>
        <a class="btn btn-michi mt-2" href="index.php">Ir al catálogo</a>
      </div>
    </section>
<?php require_once 'php/footer.php'; ?>
