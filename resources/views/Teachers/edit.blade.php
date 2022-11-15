@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Maestros Editar</h1>
    
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Editar Maestro</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('teachers/' .$teachers->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")

                <input class="form-control" type="text" value="{{$teachers->id}}" aria-label="Disabled input example" disabled>

                <label for=""> Nombre:</label>
                <input class="form-control" type="text" value="{{$teachers->name}}"  name="name" id="name">

                <label for=""> Sexo:</label>
                <input class="form-control" type="text" value="{{$teachers->sexo}}" name="sexo" id="sexo">

                <label for=""> Edad:</label>
                <input class="form-control" type="text" value="{{$teachers->edad}}" name="edad" id="edad">

                <label for=""> Direccion:</label>
                <input class="form-control" type="text" value="{{$teachers->direccion}}" name="direccion" id="direccion">

                <label for=""> Telefono:</label>
                <input class="form-control" type="text" value="{{$teachers->telefono}}" name="telefono" id="telefono">
                    
                <div class="row">
                    <a class="btn btn-danger m-3"  href="/teachers" >atras</a>
                    <button type="submit" class="btn btn-primary m-3" value="update">Guadar</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('layouts.footer')