@extends('layouts.basepro')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('citas.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Citas - Binmueble</title>
</head>
<body>
    <header>
        <div class="header-container">
            <nav>
                <ul>
                    <li><a href="#citas">Citas</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="citas">
        <div class="citas-container" style="background-color: #f5f5f5; padding: 20px; border: 1px solid #ddd; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 500px; margin: 0 auto;">
            <form method="POST" action="{{ route('citas.store') }}" class="appointment-form" style="margin-top: 20px;">
                @csrf
                <h2>Calendario de Citas</h2>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="instrucciones">Instrucciones:</label>
                    <textarea id="instrucciones" name="instrucciones" rows="3" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="fecha">Fecha de la cita:</label>
                    <input type="date" id="fecha" name="fecha" required class="form-control">
                </div>
                <button type="submit" id="agendar" class="btn btn-primary">Agendar Cita</button>
                @if(session('success'))
                <div class="alert alert-success" id="success-alert">
                    {{ session('success') }}
                </div>
                 @endif
            </form>
        </div>
    </main>    
</body>
</html>
@endsection

<script>
    // Cierra el mensaje emergente después de 3 segundos
    setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 3000); // 3000 milisegundos = 3 segundos
</script>
