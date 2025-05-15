<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concurso Automotriz - Gran Premio</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-brand {
            background-color: #004d99;
            color: white;
        }

        .btn-brand {
            background-color: #e60000;
            color: white;
            font-weight: bold;
        }

        .btn-brand:hover {
            background-color: #cc0000;
            color: white;
        }

        .form-label {
            font-weight: 600;
        }

        .winner-card {
            border: 5px solid gold;
            background-color: #f8f9fa;
            border-radius: 15px;
        }

        .required:after {
            content: " *";
            color: red;
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="bg-brand py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h1>Concurso Gran Premio</h1>
                    <p class="lead mb-0">Regístrate y gana premios exclusivos</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <img src="https://via.placeholder.com/200x80?text=LOGO" alt="Logo" class="img-fluid">
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="py-5">
        <div class="container">
            <!-- flash message -->
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- participant' counter -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">Participantes Registrados</h4>
                            <h2 class="display-4">{{ $userCount }}</h2>
                            @if ($userCount >= 5 && !$winner)
                                <form method="POST" action="{{ route('competition.winner') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Seleccionar Ganador</button>
                                </form>
                            @elseif($userCount < 5)
                                <p class="text-muted">Se necesitan al menos 5 participantes para elegir un ganador</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Winner -->
                <div class="col-md-6">
                    @if ($winner)
                        <div class="card winner-card">
                            <div class="card-body text-center">
                                <h4 class="card-title">¡Felicidades al Ganador!</h4>
                                <h3 class="card-text mb-3">{{ $winner->name }} {{ $winner->lastName }}</h3>
                                <p><strong>Ciudad:</strong> {{ $winner->city }}, {{ $winner->departament }}</p>
                                <div class="mt-3">
                                    <i class="fas fa-trophy fa-3x text-warning"></i>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="card-title">Ganador del Concurso</h4>
                                <p class="mb-3">Aún no se ha seleccionado un ganador</p>
                                <div class="mt-3">
                                    <i class="fas fa-trophy fa-3x text-secondary"></i>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <!-- Registration form  -->
                <div class="col-lg-8">
                    <div class="card shadow">
                        <div class="card-header bg-brand">
                            <h3 class="mb-0">Registro para el Concurso</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('competition.store') }}" method="POST" id="registroForm">
                                @csrf
                                <div class="row g-3">
                                    <!-- Name -->
                                    <div class="col-md-6">
                                        <label for="nombre" class="form-label required">Nombre</label>
                                        <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                                            id="name" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- lastName -->
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label required">Apellido</label>
                                        <input type="text"
                                            class="form-control @error('apellido') is-invalid @enderror" id="apellido"
                                            name="lastName" value="{{ old('lastName') }}" required>
                                        @error('lastName')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- identification -->
                                    <div class="col-md-6">
                                        <label for="identification" class="form-label required">Cédula</label>
                                        <input type="text"
                                            class="form-control @error('identification') is-invalid @enderror"
                                            id="identification" name="identification"
                                            value="{{ old('identification') }}" required>
                                        @error('identification')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- phone -->
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label required">Celular</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" value="{{ old('phone') }}" required>
                                        @error('phone')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-12">
                                        <label for="email" class="form-label required">Correo Electrónico</label>
                                        <input type="email"
                                            class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Cities -->
                                    <div class="col-md-6">
                                        <label for="cities" class="form-label required">Ciudad</label>
                                        <select class="form-select @error('cities') is-invalid @enderror"
                                            id="cities" name="cities" required>
                                            <option value="">Seleccione una ciudad</option>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}"
                                                    {{ old('city') == $city->id ? 'selected' : '' }}>
                                                    {{ $city->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('cities')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Departamentos -->
                                    <div class="col-md-6">
                                        <label for="departament" class="form-label required">Departamento</label>
                                        <select class="form-select @error('departament') is-invalid @enderror"
                                            id="departament" name="departament" required>
                                        </select>
                                        @error('departament')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Habeas Data -->
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input @error('habeasData') is-invalid @enderror"
                                                type="checkbox" value="1" id="habeasData" name="habeasData"
                                                required {{ old('habeasData') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="habeasData">
                                                Autorizo el tratamiento de mis datos de acuerdo con la finalidad
                                                establecida en la
                                                <a href="{{ route('competition.privacy') }}" target="_blank">política
                                                    de
                                                    protección de datos personales</a>.
                                            </label>
                                            @error('habeasData')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Botón de envío -->
                                    <div class="col-12 mt-4">
                                        <button type="submit" class="btn btn-brand btn-lg">Participar en el
                                            Concurso</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- information the competition -->
                <div class="col-lg-4">
                    <div class="card shadow mb-4">
                        <div class="card-header bg-brand">
                            <h3 class="mb-0">Premios</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-car fa-2x text-danger me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Test Drive</h5>
                                        <p class="mb-0 text-muted">Prueba nuestros modelos exclusivos</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-gift fa-2x text-success me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Kit de Merchandising</h5>
                                        <p class="mb-0 text-muted">Productos oficiales de la marca</p>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fas fa-ticket-alt fa-2x text-primary me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Eventos Exclusivos</h5>
                                        <p class="mb-0 text-muted">Acceso a lanzamientos y eventos VIP</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Export Excel -->
                    <div class="card shadow">
                        <div class="card-header bg-brand">
                            <h3 class="mb-0">Administración</h3>
                        </div>
                        <div class="card-body">
                            <p>Descargar listado de participantes:</p>
                            <a href="{{ route('competition.excel') }}" class="btn btn-success w-100">
                                <i class="fas fa-file-excel me-2"></i> Exportar a Excel
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p>&copy; {{ date('Y') }} - Todos los derechos reservados</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="{{ route('competition.privacy') }}" class="text-white">Política de Privacidad</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Obtener referencias a los elementos del DOM
            const ciudadSelect = document.getElementById('cities');
            const departamentSelect = document.getElementById('departament');

            // Agregar evento change al select de ciudad
            ciudadSelect.addEventListener('change', function() {
                const ciudadId = this.value;
                console.log(ciudadId);
                // Reiniciar el select de departamentos
                departamentSelect.innerHTML = '<option value="">Cargando departamentos...</option>';

                if (ciudadId) {
                    // Realizar petición AJAX
                    fetch(`/get-departaments/${ciudadId}`)
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            // Vaciar el select
                            departamentSelect.innerHTML =
                                '<option value="">Seleccione un departamento</option>';

                            // Llenar el select con los departamentos
                            data.forEach(departament => {
                                const option = document.createElement('option');
                                option.value = departament.id;
                                option.textContent = departament.name;
                                departamentSelect.appendChild(option);
                            });
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            departamentSelect.innerHTML =
                                '<option value="">Error al cargar departamentos</option>';
                        });
                } else {
                    // Si no hay ciudad seleccionada
                    departamentSelect.innerHTML = '<option value="">Seleccione primero una ciudad</option>';
                }
            });
        });
    </script>
</body>

</html>
