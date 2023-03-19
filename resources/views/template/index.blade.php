@extends('layouts.main')

@section('container')


@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
</div>
@endif

@if (count($errors) > 0)a

<div class="alert alert-danger d-flex align-items-center" role="alert">

    <div>
        @foreach ($errors->all() as $error)
        <div>
            <i class="fa-solid fa-warning"></i> {{ $error }}
        </div>
        @endforeach
    </div>

</div>
@endif

{{-- <h1 class="mb-3 text-center">Data Kemiskinan</h1> --}}

{{-- <section class="content table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Data
    </button> --}}

    <div class="col-5 text-end">
        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-plus"></i> Tambah</button>
        {{-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModalList"><i class="far fa-plus"></i> List</button> --}}
    </div>
</div>
<div class="table-responsive text-wrap mt-4">
    <table class="table table-striped " id="table-display">
        <thead>
            <tr>
                <th >No</th>
                <th >Nama</th>
                <th >Text</th>
                <th >pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($template as $t )

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t->judul }}</td>
                <td>{{ $t->text }}</td>
                {{-- <td>{{ $t->alamat }}</td> --}}

                <td>

                    {{-- <a href="/kemiskinan/{{ $sj->id }}"  class="badge bg-info"><i class="fa-solid fa-circle-info"></i></a> --}}
                    <a href="/kemiskinan/{{ $t->id }}/edit"class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></span></a>
                    <form action="/kemiskinan/{{ $t->id }}" method="POST" class=" d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                    <button type="button" class="btn btn-success btn-sm" data-id="{{$t->id}}" onclick="edit({{ $t->id}})">
                        <i class="fa-solid fa-pen-to-square"></i> Edit
                    </button>
                    {{-- <form action="/details/{{ $t->id }}" method="POST" class=" d-inline">
                        @csrf
                        <input type="hidden" name="bantuan" value="{{ $t->id }}">
                        <input type="hidden" name="donatur" value="{{ $t->donatur }}">
                        <button class="badge bg-success border-0""><i class="fa-solid fa-book"></i></button>
                    </form> --}}
                    {{-- </a> --}}
                </td>
            </tr>

            @endforeach

        </tbody>
    </table>
</section>





    <!-- Modal edit data -->
    <div class="modal fade" id="editModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title-edit fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-12">
                        <form method="POST" action="/templatess" id="form-update" class="mb-5" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <input type="hidden" id="id" name="id">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid
                                @enderror" id="judul" name="judul" value="{{ old('judul') }}">
                                @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label for="alamat" class="form-label">text</label>
                                <input type="text" class="form-control @error('text') is-invalid
                                @enderror" id="text" name="text" value="{{ old('text') }}">
                                @error('text')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>



                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="id">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form method="POST" action="/template/" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        {{-- <input type="hidden" name="donatur_id" value="{{ $d }}"> --}}
                        <div class="mb-3">
                            <label class="form-label">Nama Template</label>
                            <input type="text" id="judul" class="form-control @error('judul') is-invalid
                            @enderror" name="judul" value="{{ old('judul') }}">
                            @error('judul')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Text Wa</label>
                            <textarea type="text" id="text" class="form-control @error('text') is-invalid
                            @enderror" name="text" value="">{{ old('text') }}</textarea>
                            @error('text')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                    </div>
                </form>
            </div>

        </div>
    </div>



<script>
      function edit(id) {
                        save_method = 'update';
                        $('#form-update')[0].reset(); // reset form on modals
                        $('.form-group').removeClass('has-error'); // clear error class
                        $('.help-block').empty(); // clear error string

                        //Ajax Load data from ajax
                        $.ajax({
                            url: "/templates/"+id,
                            type: "GET",
                            dataType: "JSON",
                            contentType: false,
                            processData: false,
                            success: function(data) {
                                $('[id="id"]').val(data.id);
                                $('[id="judul"]').val(data.judul);
                                $('[id="text"]').val(data.text);



                                $('#editModal').modal('show'); // show bootstrap modal when complete loaded
                                $('.modal-title-edit').text('Edit Pengguna'); // Set title to Bootstrap modal title

                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert('Error get data from ajax');
                            }
                        });
                    }

</script>







    @endsection


    @section('script')
    <script>
        $(document).ready(function () {
            $('#table-display').DataTable();
        });
    </script>



    @endsection
