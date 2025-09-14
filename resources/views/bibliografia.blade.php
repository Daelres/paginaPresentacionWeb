<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biografía</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 0%, #eef2f7 100%);
            min-height: 100vh;
        }
        .blog-hero {
            background: radial-gradient(1200px 400px at top left, #0d6efd22, transparent),
                        radial-gradient(800px 300px at bottom right, #6610f222, transparent),
                        #ffffff;
            border-radius: 1.25rem;
            box-shadow: 0 20px 60px rgba(13,110,253,0.08);
        }
        .brand-dot {
            width: 10px; height: 10px; border-radius: 50%; display: inline-block; margin-right: 8px;
            background: linear-gradient(45deg, #0d6efd, #6610f2);
        }
        .post-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 12px 40px rgba(0,0,0,0.06);
        }
        .accordion-button:not(.collapsed) {
            color: #0d6efd;
            background-color: #e9f2ff;
        }
        footer {
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <!-- Encabezado tipo blog -->
        <header class="blog-hero p-4 p-md-5 mb-4">
            <div class="row align-items-center g-4">
                <div class="col-md-8">
                    <h1 class="display-6 fw-bold mb-2">
                        <span class="brand-dot"></span>Mi Biografía
                    </h1>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="#secciones" class="btn btn-primary btn-lg shadow-sm">Ver secciones</a>
                </div>
            </div>
        </header>

        <!-- Contenido principal -->
        <main id="secciones" class="row g-4">
            <div class="col-12 col-lg-8">
                <div class="card post-card">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h4 mb-4">Secciones</h2>

                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNombre">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNombre" aria-expanded="true" aria-controls="collapseNombre">
                                        Nombre
                                    </button>
                                </h2>
                                <div id="collapseNombre" class="accordion-collapse collapse show" aria-labelledby="headingNombre" data-bs-parent="#accordionBibliografia">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-5">Daniel Francisco Restrepo Herrera</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingNombre">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNombre" aria-expanded="true" aria-controls="collapseNombre">
                                        Lugar de nacimiento
                                    </button>
                                </h2>
                                <div id="collapseNombre" class="accordion-collapse collapse show" aria-labelledby="headingNombre" data-bs-parent="#accordionBibliografia">
                                    <div class="accordion-body">
                                        <p class="mb-0 fs-5">Lugar de nacimiento:</p>
                                        <small class="text-muted">Nací en Bucaramanga, Santander</small>
                                        <small class="text-muted">El nombre de mi Mamá es Sandra Milena Restrepo Herrera</small>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <hr class="my-5">
                        <p class="text-secondary mb-0">Próximamente podrás agregar más secciones (Educación, Experiencia, Publicaciones, Contacto) como elementos adicionales del acordeón.</p>
                    </div>
                </div>
            </div>

        </main>

        <footer class="pt-5 text-center small">
            Hecho con Bootstrap · {{ date('Y') }}
        </footer>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
