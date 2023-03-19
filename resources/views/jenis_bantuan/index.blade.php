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

{{-- <h1 class="mb-3 text-center">Data Kecamatan</h1> --}}
<div class="col-5 text-end">
    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-plus"></i> Tambah</button>
    {{-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModalList"><i class="far fa-plus"></i> List</button> --}}
</div>
</div>
<div class="table-responsive text-wrap mt-4">
<table class="table table-striped ">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Jenis Bantuan</th>
        <th colspan="3">pilihan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($jenis_bantuan as $jb )

        <tr>
            <td>{{ $loop->iteration }}</td>
          <td>{{ $jb->jenis_bantuan }}</td>

          <td>

            <a href="/jenis-bantuan/{{ $jb->id }}/edit"class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i> Hapus</span></a>
            <form action="/jenis-bantuan/{{ $jb->id }}" method="POST" class=" d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                </form>


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
            <div class="col-lg-8">
                <form method="POST" action="/jenis-bantuan" class="mb-5" enctype="multipart/form-data">
                    @csrf
                     <div class="mb-3">
                      <label class="form-label">Jenis Bantuan</label>
                      <input type="text" id="jenis-bantuan" class="form-control @error('kecamatan') is-invalid
                      @enderror" name="jenis-bantuan" value="{{ old('jenis-bantuan') }}">
                      @error('jenis-bantuan')
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
     function detail(id) {
      $('#form-detail')[0].reset(); // reset form on modals
      $('.form-group').removeClass('has-error'); // clear error class
      $('.help-block').empty(); // clear error string

      //Ajax Load data from ajax
      $.ajax({
        url: "/donasi/"+id,
        type: "GET",
        dataType: "JSON",
        contentType: false,
        processData: false,
        success: function(data) {
          $('[id="id"]').val(data.id);
          $('[id="nama_instansi"]').val(data.nama_instansi);
          $('[id="deskripsi"]').val(data.deskripsi);
          $('#gambar').attr('src', 'storage/'+data.gambar);


          $('.detailModal').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title-detail').text('Detail Bantuan'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
    }
</script>





@endsection
