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

{{-- <h1 class="mb-3 text-center">Data donatur</h1> --}}

<div class="col-5 text-end">
    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-plus"></i> Tambah</button>
    {{-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModalList"><i class="far fa-plus"></i> List</button> --}}
</div>
</div>
{{-- <section class="content table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Data
    </button> --}}
    <table class="table " id="table-display">
        <thead>
            <tr class="data-row">
                <th>No</th>
                <th>Donatur</th>
                <th>deskripsi</th>
                {{-- <th>Jumlah Bantuan</th> --}}
                <th>pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donatur as $dtr )

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dtr->nama_instansi}}</td>
                <td>{{ $dtr->deskripsi }}</td>

                <td>

                    {{-- <a href="/bantuan/{{ $dtr->id }}"  class="badge bg-info border-0 "><i class="fa-solid fa-circle-info"></i></a> --}}


                    {{-- <button type="button" class="badge bg-warning edit border-0" data-id="{{$dtr->id}}" onclick="tambahsubject({{ $dtr->id}})">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button> --}}
                    <button type="button" class="btn btn-success btn-sm" data-id="{{$dtr->id}}" onclick="edit({{ $dtr->id}})">
                        <i class="fa-solid fa-pen-to-square"></i> Edit
                    </button>

                    <form action="/subject-donatur/{{ $dtr->id }}" method="POST" class=" d-inline">
                        @csrf
                        <input type="hidden" name="donatur" value="{{ $dtr->id }}">


                        <button class="btn btn-primary btn-sm""><i class="fa-solid fa-book"></i> Donatur</button>
                    </form>

                    <button type="button"  class="btn btn-info btn-sm"  data-id="{{$dtr->id}}" onclick="detail({{ $dtr->id}})">
                        <i class="fa-solid fa-circle-info"> </i> Detail
                      </button>


                    <form action="/donatur/{{ $dtr->id }}" method="POST" class=" d-inline">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="bantuan" value="{{ $dtr->id }}">
                        <button class=" btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>



 <!-- Modal detail -->
 <div class="modal fade detailModal"  >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title-detail fs-5" >Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-lg-10">
                <form id="form-detail" class="mb-5" >

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Nama</label>
                        <input type="text" class="form-control border-0 bg-white" id="nama_instansi" name="judul_bantuan" >
                       </div>


                        <div class="form-outline mb-3">
                         <label class="form-label">Deskripsi</label>
                         <input class="form-control border-0 bg-white" name="deskripsi" id="deskripsi" rows="4"></input>
                        </div>


                       <div class="mb-3">
                        <label class="form-label">Gambar</label>
                        <img class="img-fluid mb-3 lg-1" id="gambar">
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
                        <form method="POST" action="/donaturu" id="form-update" class="mb-5" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <input type="hidden" id="id" name="id">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Nama Instansi</label>
                                <input type="text" class="form-control @error('nama_instansi') is-invalid
                                @enderror" id="nama_instansi" name="nama_instansi" value="{{ old('nama_instansi') }}">
                                @error('nama_instansi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Post Image</label>
                                <img class="edit-img-preview img-fluid mb-3 lg-1" id="edit-img">
                                <input class="form-control @error('image') is-invalid
                                @enderror" type="file" id="edit-image" name="gambar" onchange="previewEditImage()">
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-outline mb-3">
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control  @error('deskripsi') is-invalid
                                @enderror" name="deskripsi" id="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
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











<!-- Modal input data -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Input Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <form method="POST" action="/donatur" class="mb-5" enctype="multipart/form-data">
                        @csrf


                        <div class="form-outline mb-3">
                            <label class="form-label">Nama Instansi</label>
                            <input type="text" class="form-control @error('nama_instansi') is-invalid
                            @enderror" name="nama_instansi" value="{{ old('nama_instansi') }}">
                            @error('nama_instansi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea class="form-control  @error('deskripsi') is-invalid
                            @enderror" name="deskripsi" rows="4">{{ old('deskripsi') }}</textarea>
                            @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <img class="img-preview img-fluid mb-3 lg-1">
                            <input class="form-control  @error('image') is-invalid
                            @enderror"  type="file" id="image" name="gambar" onchange="previewImage()">
                            @error('image')
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
</div>




<div class="d-flex justify-content-end">
    {{ $bantuan->links() }}
</div>



{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> --}}

@endsection


    @section('script')
<script>
$(document).ready(function () {
    $('#table-display').DataTable();
});
</script>

<script>
    function previewImage(){
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.img-preview');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }



    function previewImageUndangan(){
        const image = document.querySelector('#image_undangan_wa');
        const imagePreview = document.querySelector('.img-preview_undangan_wa');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }



    function previewEditImage(){
        const image = document.querySelector('#edit-image');
        const imagePreview = document.querySelector('.edit-img-preview');

        imagePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imagePreview.src = oFREvent.target.result;
        }
    }






</script>



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







    function edit(id) {
                        save_method = 'update';
                        $('#form-update')[0].reset(); // reset form on modals
                        $('.form-group').removeClass('has-error'); // clear error class
                        $('.help-block').empty(); // clear error string

                        //Ajax Load data from ajax
                        $.ajax({
                            url: "/donasis/"+id,
                            type: "GET",
                            dataType: "JSON",
                            contentType: false,
                            processData: false,
                            success: function(data) {
                                $('[id="id"]').val(data.id);
          $('[id="nama_instansi"]').val(data.nama_instansi);
          $('[id="deskripsi"]').val(data.deskripsi);
          $('#gambar').attr('src', 'storage/'+data.gambar);



                                $('#editModal').modal('show'); // show bootstrap modal when complete loaded
                                $('.modal-title-edit').text('Edit Pengguna'); // Set title to Bootstrap modal title

                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert('Error get data from ajax');
                            }
                        });
                    }


</script>


<script>

    function cloneRow() {
        $('#tambah-subject tr:last').clone().insertAfter('#tambah-subject tr:last')

$trLast.after($trNew);
    }


    function tambahsubject(id) {
        save_method = 'update';
        $('#form-update')[0].reset(); // reset form on modals
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
                console.log(data);
                var teks = "";
                $.each(data, function (index, val) { //looping table detail bahan
                    var nama_lengkap = val.nama_lengkap;
                    var nohp = val.nohp;
                    var alamat = val.alamat;


                    teks += "<tr><td><input type='hidden' name='donatur_id[]' value="+id+"><input name='" + nama_lengkap +
                        "[]' type='text' value='"+nama_lengkap+"'></td><td><input name='" + nohp +
                            "[]' type='text' value='"+nohp+"'></td><td><input name'" + alamat +
                                "[]' type='text' value='"+alamat+"'</td></tr>";
                            });
                            teks += "<tr><td><input type='hidden' name='donatur_id[]' value="+id+"><input type='text' name='nama_lengkap[]'></td><td><input type='text' name='nohp[]'></td><td><input type='text' name='alamat[]'></td></tr>";
                            $("#tambah-subject").append(teks);



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
