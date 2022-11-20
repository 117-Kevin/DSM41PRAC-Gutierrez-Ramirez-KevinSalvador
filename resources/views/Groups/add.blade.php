@include('layouts.header')
@include('layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Grupos Altas</h1>
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Alta Grupo</h6>
            </div>
            <div class="card-body">
                
                <form action="{{ url('groups.store') }}" method="post">
                    {!! csrf_field() !!}
                    
                        <label > Nombre:</label>
                        <input class="form-control" type="text" id="name" name="name">

                        <label for=""> Descripción:</label>
                        <input class="form-control" type="text" id="description" name="description">
                        
                        <div class="form-group">
                        <label for=""> Estudiante Asignado:</label>
                            <select class="form-control form-select" aria-label="Default select example" name="student_id">
                            <option selected>Elige el nombre del estudiante</option>
                                @foreach($estudiantes as $estudiante)   
                            <option value={{$estudiante->id}}>{{$estudiante->name}}</option>
                               @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-primary m-3" value="save">Guadar</button>

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