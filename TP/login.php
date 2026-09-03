<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
}

$tituloPagina = 'Ingresar | MichiMarket';
$error = isset($_GET['error']);
require_once 'php/header.php';
?>
    <section class="login-wrap">
      <div class="login-card">
        <div class="text-center mb-4">
          <p class="login-kicker mb-2">Marketplace de gatitos</p>
          <h1 class="h3 mb-2">Bienvenido de nuevo</h1>
          <p class="text-muted mb-0">Ingresá tu usuario y contraseña para continuar</p>
        </div>

        <?php if ($error): ?>
          <div class="alerta-error" role="alert">
            Usuario o contraseña incorrectos. Volvé a intentar.
          </div>
        <?php endif; ?>

        <form id="miForm" class="form-michi" action="procesoLogin.php" method="POST" novalidate>
          <div class="mb-3">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresá tu usuario" autocomplete="username">
          </div>

          <div class="mb-3">
            <label for="password">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresá tu contraseña" autocomplete="current-password">
          </div>

          <button type="submit" id="submit-btn" class="btn btn-michi btn-lg w-100" disabled>Ingresar</button>
        </form>
      </div>
    </section>
    <script src="js/validation.js"></script>
<?php require_once 'php/footer.php'; ?>
