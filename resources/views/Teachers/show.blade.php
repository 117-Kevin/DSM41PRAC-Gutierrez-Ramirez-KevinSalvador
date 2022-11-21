@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Maestro Información</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Maestro</h6>
            </div>
            <section class="tarjeta">
                <div class="card__person">
                </div>
                <h5 class="card__name">{{$teachers->id }}</h5>
                <p class="card__position">Estudiante</p> 
                <p class="card__position">{{$teachers->name}}</p>
                <p class="card__position">Sexo:</p>
                <p class="card__position">{{$teachers->sexo}}</p>
                <p class="card__position">Edad:</p>
                <p class="card__position">{{$teachers->edad}}</p>
                <p class="card__position">Direccion:</p>
                <p class="card__position">{{$teachers->direccion}}</p>
                <p class="card__position">Telefono:</p>
                <p class="card__position">{{$teachers->telefono}}</p>
                <a href="{{ route('teachers.index') }}" class="btn btn-sm btn-success mr-0 boton"> Volver </a></div>
            </section>
           <!-- <div class="card-body">
             <h6 class="card-title">Nombre: {{ $teachers->name }}</h6>
             <h6 class="card-text">Sexo: {{ $teachers->sexo }}</h6>
             <h6 class="card-text">Edad: {{ $teachers->edad }}</h6>
             <h6 class="card-text">Direccion: {{ $teachers->direccion }}</h6>
             <h6 class="card-text">Telefono: {{ $teachers->telefono }}</h6>
             <a class="btn btn-outline-success m-3" href="/teachers" ><i class="fa-solid fa-arrow-left"></i></a>
            </div>-->
       
    </div>
  
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@include('layouts.footer')