@extends('layouts.main')

@section('container')


@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
  </div>
@endif


{{-- <h1 class="mb-3 text-center">Penerima</h1> --}}
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

{{--
  <section class="content table-responsive mt-3">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Data
  </button> --}}

  <div class="col-5 text-end">
    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-plus"></i> Tambah</button>
    {{-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModalList"><i class="far fa-plus"></i> List</button> --}}
</div>
</div>
<div class="table-responsive text-wrap mt-4">

<table class="table " id="table-display">
    <thead>
      <tr>
        <th >No</th>
        <th >nama Lengkap</th>
        <th >Alamat</th>
        <th >No Hp</th>
        <th >Kecamatan</th>
        <th >Kelurahan</th>
        <th >Kemungkinan sebab</th>
        <th>pilihan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($penerima as $pnr )

        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pnr->nama }}</td>
          <td>{{ $pnr->alamat }}</td>
          <td>{{ $pnr->nohp }}</td>
          <td>{{ $pnr->kecamatan->kecamatan }}</td>
          <td>{{ $pnr->kelurahan->kelurahan }}</td>
          <td>{{ $pnr->kemungkinan->kemungkinan }}</td>
          <td>


            <a href="/penerima/{{ $pnr->id }}/edit"class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</span></a>
            <button type="button"  class="btn btn-info btn-sm"  data-id="{{$pnr->id}}" onclick="detail({{ $pnr->id}})">
                <i class="fa-solid fa-circle-info"> </i> Detail
              </button>

            <form action="/penerima/{{ $pnr->id }}" method="POST" class=" d-inline">
                @method('delete')
                @csrf
                <button class=" btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                </form>
        </td>
        </tr>

        @endforeach

    </tbody>
  </table>
</div>
</div>


<!-- Modal detail -->
<div class="modal fade detailModal"  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title-detail fs-5" >Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <form id="form-detail" class="mb-5" >

                    <div class="mb-3">
                        <label for="alamat" class="form-label">No KTP</label>
                        <input type="text" class="form-control border-0 bg-white" id="noktp" name="judul_bantuan" >
                       </div>


                        <div class="form-outline mb-3">
                         <label class="form-label">NIK</label>
                         <input class="form-control border-0 bg-white" name="nik" id="nik" rows="4"></input>
                        </div>


                        <div class="form-outline mb-3">
                            <label class="form-label">Nama</label>
                            <input class="form-control border-0 bg-white" name="nama" id="nama" rows="4"></input>
                           </div>

                           <div class="form-outline mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input class="form-control border-0 bg-white" name="tempat_lahir" id="tempat_lahir" rows="4"></input>
                           </div>

                           <div class="form-outline mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input class="form-control border-0 bg-white" name="tanggal_lahir" id="tanggal_lahir" rows="4"></input>
                           </div>

                           <div class="form-outline mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <input class="form-control border-0 bg-white" name="jenis_kelamin" id="jenis_kelamin" rows="4"></input>
                           </div>

                           <div class="form-outline mb-3">
                            <label class="form-label">Alamat</label>
                            <input class="form-control border-0 bg-white" name="alamat" id="alamat" rows="4"></input>
                           </div>

                           <div class="form-outline mb-3">
                            <label class="form-label">No Hp</label>
                            <input class="form-control border-0 bg-white" name="nohp" id="nohp" rows="4"></input>
                           </div>

                           <div class="form-outline mb-3">
                            <label class="form-label">Pendapatan</label>
                            <input class="form-control border-0 bg-white" name="pendapatan" id="pendapatan" rows="4"></input>
                           </div>

                           <div class="form-outline mb-3">
                            <label class="form-label">Status</label>
                            <input class="form-control border-0 bg-white" name="status" id="status" rows="4"></input>
                           </div>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </form>
    </div>
      </div>
    </div>
  </div






  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Penerima</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-lg-8">
                <form method="POST" action="" class="mb-5" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="noktp" class="form-label">No KTP</label>
                        <input type="text" class="form-control @error('noktp') is-invalid
                        @enderror" id="noktp" name="noktp" value="{{ old('noktp') }}">
                        @error('noktp')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>


                      <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid
                        @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid
                        @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>


                      <div class="mb-3">
                        <label for="alamat" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control @error('tempat_lahir') is-invalid
                        @enderror" id="tempat_lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
                        @error('tempat_lahir')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>



                      <div class="mb-3">
                        <label for="alamat" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid
                        @enderror" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                        @error('tanggal_lahir')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>




                      <div class="mb-3">
                        <label for="alamat" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control @error('jenis_kelamin') is-invalid
                        @enderror" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                        @error('jenis_kelamin')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>



                      <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid
                        @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>



                      <div class="mb-3">
                        <label for="nohp" class="form-label">No Hp</label>
                        <input type="text" class="form-control @error('nohp') is-invalid
                        @enderror" id="nohp" name="nohp" value="{{ old('nohp') }}">
                        @error('nohp')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>





                      <div class="mb-3">
                        <label class="form-label">kelurahan</label>
                        <select class="form-select" name="kelurahan_id">
                         @foreach ($kelurahan as $kr )
                         @if (old('kelurahan_id') == $kr->id)
                         <option value="{{ $kr->id }}" selected>{{ $kr->kelurahan }}</option>
                         @else
                         <option value="{{ $kr->id }}">{{ $kr->kelurahan }}</option>
                         @endif
                         @endforeach
                        </select>
                      </div>





                      <div class="mb-3">
                        <label for="category" class="form-label">Kecamatan</label>
                        <select class="form-select" name="kecamatan_id">
                         @foreach ($kecamatan as $km )
                         @if (old('kecamatan_id') == $km->id)
                         <option value="{{ $km->id }}" selected>{{ $km->kecamatan }}</option>
                         @else
                         <option value="{{ $km->id }}">{{ $km->kecamatan }}</option>
                         @endif
                         @endforeach
                        </select>
                      </div>


                      <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control @error('status') is-invalid
                        @enderror" id="status" name="status" value="{{ old('status') }}">
                        @error('status')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>


                      <div class="mb-3">
                        <label for="alamat" class="form-label">Pendapatan</label>
                        <input type="text" class="form-control @error('pendapatan') is-invalid
                        @enderror" id="pendapatan" name="pendapatan" value="{{ old('pendapatan') }}">
                        @error('pendapatan')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                      </div>




                      <div class="mb-3">
                        <label class="form-label"> Kemungkinan</label>
                        <select class="form-select" name="kemungkinan_id">
                         @foreach ($kemungkinan as $k )
                         @if (old('kemungkinan_id') == $k->id)
                         <option value="{{ $k->id }}" selected>{{ $k->kemungkinan }}</option>
                         @else
                         <option value="{{ $k->id }}">{{ $k->kemungkinan }}</option>
                         @endif
                         @endforeach
                        </select>
                      </div>




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
        url: "/penerimas/"+id,
        type: "GET",
        dataType: "JSON",
        contentType: false,
        processData: false,
        success: function(data) {
          $('[id="id"]').val(data.id);
          $('[id="noktp"]').val(data.noktp);
          $('[id="nik"]').val(data.nik);
          $('[id="nama"]').val(data.nama);
          $('[id="tempat_lahir"]').val(data.tempat_lahir);
          $('[id="tanggal_lahir"]').val(data.tanggal_lahir);
          $('[id="jenis_kelamin"]').val(data.jenis_kelamin);
          $('[id="alamat"]').val(data.alamat);
          $('[id="nohp"]').val(data.nohp);
          $('[id="status"]').val(data.status);
          $('[id="pendapatan"]').val(data.pendapatan);



          $('.detailModal').modal('show'); // show bootstrap modal when complete loaded
          $('.modal-title-detail').text('Detail Bantuan'); // Set title to Bootstrap modal title

        },
        error: function(jqXHR, textStatus, errorThrown) {
          alert('Error get data from ajax');
        }
      });
    }

</script>



@section('script')
<script>
    $(document).ready(function () {
$('#table-display').DataTable();
});
</script>

@endsection

@endsection
