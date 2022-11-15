@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Maestros Altas</h1>

</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Maestros</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('teachers')}}" method="POST">
                {!! csrf_field() !!}

                <label for=""> Nombre:</label>
                <input class="form-control" type="text"  name="name" id="name">
                <label for=""> Sexo:</label>
                <input class="form-control" type="text"  name="sexo" id="sexo">
                <label for=""> Edad:</label>
                <input class="form-control" type="text"  name="edad" id="edad">
                <label for=""> Direccion:</label>
                <input class="form-control" type="text"  name="direccion" id="direccion">
                <label for=""> Telefono:</label>
                <input class="form-control" type="text"  name="telefono" id="telefono">
                <div class="form-group">
                    <label for=""> Asignatura Asignado:</label>
                        <select class="form-control form-select" aria-label="Default select example" name="subject_id">
                        <option selected>Nombre de la Asignatura</option>
                            @foreach($asignaturas as $asignatura)   
                        <option value={{$asignatura->id}}>{{$asignatura->name}}</option>
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""> Grupo Asignado:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="group_id">
                            <option selected>Nombre del Grupo</option>
                                @foreach($grupos as $grupo)   
                            <option value={{$grupo->id}}>{{$grupo->name}}</option>
                               @endforeach
                            </select>
                        </div>
                
                <div class="row">
                    <button type="submit" class="btn btn-primary m-3">Guadar</button>

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