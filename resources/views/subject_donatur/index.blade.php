@extends('layouts.main')

@section('container')


@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
  </div>
@endif

@if (count($errors) > 0)

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
        <th >No Hp</th>
        <th >Alamat</th>
        <th >pilihan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subject as $sj )

        <tr>
            <td>{{ $loop->iteration }}</td>
          <td>{{ $sj->nama_lengkap }}</td>
          <td>{{ $sj->nohp }}</td>
          <td>{{ $sj->alamat }}</td>

          <td>

            <a href="/kemiskinan/{{ $sj->id }}"  class="badge bg-info"><i class="fa-solid fa-circle-info"></i></a>
            <a href="/kemiskinan/{{ $sj->id }}/edit"class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></span></a>
            <form action="/kemiskinan/{{ $sj->id }}" method="POST" class=" d-inline">
                @method('delete')
                @csrf
                <button class=" badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                </form>
                <form action="/details/{{ $sj->id }}" method="POST" class=" d-inline">
                    @csrf
                    <input type="hidden" name="bantuan" value="{{ $sj->id }}">
                    <input type="hidden" name="donatur" value="{{ $sj->donatur }}">
                    <button class="badge bg-success border-0""><i class="fa-solid fa-book"></i></button>
                </form>
                </a>
        </td>
        </tr>

        @endforeach

    </tbody>
  </table>
  </section>





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
                <form method="POST" action="/subject-donaturs/" class="mb-5" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="donatur_id" value="{{ $d }}">
                     <div class="mb-3">
                      <label class="form-label">Nama Lengkap</label>
                      <input type="text" id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid
                      @enderror" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
                      @error('nama_lengkap')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                       </div>

                       <div class="mb-3">
                        <label class="form-label">No Hp</label>
                        <input type="text" id="nohp" class="form-control @error('nohp') is-invalid
                        @enderror" name="nohp" value="{{ old('nohp') }}">
                        @error('nohp')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                         </div>

                         <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" id="alamat" class="form-control @error('alamat') is-invalid
                            @enderror" name="alamat" value="{{ old('alamat') }}">
                            @error('alamat')
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











    @endsection


    @section('script')
    <script>
        $(document).ready(function () {
    $('#table-display').DataTable();
});
    </script>

@endsection
