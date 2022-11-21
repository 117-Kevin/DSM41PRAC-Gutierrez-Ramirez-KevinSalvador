@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Estudiante Información</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Estudiante</h6>
            </div>
            <section class="tarjeta">
                <div class="card__person">
                </div>
                <h5 class="card__name">{{$students->id }}</h5>
                <p class="card__position">Estudiante</p> 
                <p class="card__position">{{$students->name}}</p>
                <p class="card__position">Sexo:</p>
                <p class="card__position">{{$students->sexo}}</p>
                <p class="card__position">Edad:</p>
                <p class="card__position">{{$students->edad}}</p>
                <p class="card__position">Direccion:</p>
                <p class="card__position">{{$students->direccion}}</p>
                <p class="card__position">Telefono:</p>
                <p class="card__position">{{$students->telefono}}</p>
                <a href="{{ route('students.index') }}" class="btn btn-sm btn-success mr-0 boton"> Volver </a></div>
            </section>
           <!-- <div class="card-body">
             <h6 class="card-title"> Nombre: {{ $students->name }}</h6>
             <h6 class="card-text">Sexo: {{ $students->sexo }}</h6>
             <h6 class="card-text">Edad: {{ $students->edad }}</h6>
             <h6 class="card-text">Direccion: {{ $students->direccion }}</h6>
             <h6 class="card-text">Telefono: {{ $students->telefono }}</h6>
             <a class="btn btn-outline-success" m-3" href="/students" ><i class="fa-solid fa-arrow-left"></i></a>
            </div>-->
       
    </div>
  
</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
@include('layouts.footer')