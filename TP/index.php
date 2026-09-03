<?php
session_start();

$tituloPagina = 'Catálogo | MichiMarket';
require_once 'php/header.php';

$gatos = [
    [
        'nombre' => 'Mochi',
        'raza' => 'Persa',
        'edad' => '2 años',
        'precio' => 18000,
        'descripcion' => 'Tranquilo, mimoso y experto en siestas al sol.',
        'imagen' => 'img/gato-mochi.svg'
    ],
    [
        'nombre' => 'Luna',
        'raza' => 'Siamés',
        'edad' => '1 año',
        'precio' => 22000,
        'descripcion' => 'Curiosa, conversadora y muy apegada a su humano.',
        'imagen' => 'img/gato-luna.svg'
    ],
    [
        'nombre' => 'Tomás',
        'raza' => 'Naranja común',
        'edad' => '3 años',
        'precio' => 12000,
        'descripcion' => 'Juguetón, valiente y con una sola neurona, pero de oro.',
        'imagen' => 'img/gato-tomas.svg'
    ],
    [
        'nombre' => 'Nube',
        'raza' => 'Blanco europeo',
        'edad' => '8 meses',
        'precio' => 15000,
        'descripcion' => 'Suave como una nube y fanático de las cajas de cartón.',
        'imagen' => 'img/gato-nube.svg'
    ],
    [
        'nombre' => 'Copito',
        'raza' => 'Ragdoll',
        'edad' => '2 años',
        'precio' => 25000,
        'descripcion' => 'Se derrite en los brazos y ronronea sin parar.',
        'imagen' => 'img/gato-copito.svg'
    ],
    [
        'nombre' => 'Misha',
        'raza' => 'Carey',
        'edad' => '4 años',
        'precio' => 14000,
        'descripcion' => 'Independiente, elegante y reina indiscutida del sillón.',
        'imagen' => 'img/gato-misha.svg'
    ],
];
?>
    <section class="hero-catalogo container">
      <h1>Encontrá a tu próximo michi</h1>
      <p class="text-muted mb-0">Gatitos listos para adopción responsable. Precio de seña a cargo del refugio.</p>
    </section>

    <section class="container py-4">
      <div class="row g-4">
        <?php foreach ($gatos as $gato): ?>
          <div class="col-12 col-md-6 col-lg-4">
            <article class="card-gato">
              <img src="<?php echo htmlspecialchars($gato['imagen']); ?>" alt="Foto de <?php echo htmlspecialchars($gato['nombre']); ?>">
              <div class="p-3">
                <div class="d-flex justify-content-between align-items-start mb-2">
                  <h2 class="h4 mb-0"><?php echo htmlspecialchars($gato['nombre']); ?></h2>
                  <span class="badge badge-raza"><?php echo htmlspecialchars($gato['raza']); ?></span>
                </div>
                <p class="text-muted mb-2"><?php echo htmlspecialchars($gato['edad']); ?></p>
                <p><?php echo htmlspecialchars($gato['descripcion']); ?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="precio-gato">$<?php echo number_format($gato['precio'], 0, ',', '.'); ?></p>
                  <button type="button" class="btn btn-michi btn-sm">Adoptar</button>
                </div>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
<?php require_once 'php/footer.php'; ?>
