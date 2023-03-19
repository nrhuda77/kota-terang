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




<div class="col-5 text-end">
    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-plus"></i> Tambah</button>
    {{-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModalList"><i class="far fa-plus"></i> List</button> --}}
</div>
</div>


{{-- <section class="content table-responsive mt-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Data
    </button> --}}

    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#static">
        Tambah Data
    </button> --}}


    <table class="table table-striped" id="table-display">
        <thead>
            <tr>
                <th>No</th>
                <th >Judul</th>
                <th >Deskripsi</th>
                <th >Jenis Bantuan</th>
                <th >pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bantuan as $btn )

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $btn->judul_bantuan}}</td>
                <td>{{$btn->deskripsi}}</td>
                <td>{{ $btn->jenis_bantuan->jenis_bantuan }}</td>


                <td>
                    {{-- donatur --}}
                    <form action="/donatur-active/{{ $btn->id }}" method="POST" class=" d-inline">
                        @csrf
                        <input type="hidden" name="bantuan" value="{{ $btn->id }}">


                        <button class="btn btn-primary btn-sm""><i class="fa-solid fa-circle-info"></i> Donatur</button>
                    </form>
                    {{-- <button class="btn btn-primary btn-sm"><i class="fa-solid fa-circle-info"></i> Donatur</button> --}}

                    {{-- edit --}}
                    <button type="button" class="btn btn-success btn-sm" data-id="{{$btn->id}}" onclick="edit({{ $btn->id}})">
                        <i class="fa-solid fa-pen-to-square"></i> Edit
                    </button>
                    {{-- <button class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</button> --}}

                    {{-- hapus --}}
                    <form action="/bantuan/{{ $btn->id }}" method="POST" class=" d-inline">
                        @method('delete')
                        @csrf
                        <input type="hidden" name="bantuan" value="{{ $btn->id }}">
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                    </form>
                    {{-- <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i> Hapus</button> --}}

                    {{-- Detail --}}
                    <form action="/details/{{ $btn->id }}" method="POST" class=" d-inline">
                        @csrf
                        <input type="hidden" name="bantuan" value="{{ $btn->id }}">
                        <input type="hidden" name="donatur" value="{{ $btn->donatur }}">
                        <input type="hidden" name="textwa" value="{{ $btn->text_wa }}">

                        <button class="btn btn-info btn-sm""><i class="fa-solid fa-file-pen"></i> Detail</button>
                    </form>
                    {{-- <button class="btn btn-info btn-sm"><i class="fa-solid fa-file-pen"></i> Sub</button> --}}
                </td>
            </tr>


            @endforeach

        </tbody>
    </table>
</section>







<!-- Modal detail -->
<div class="modal fade tambahDonaturModal"  >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title-detail fs-5" >Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="form-donatur">
                    <table id="list-donatur-datatables">
                        <thead>
                            <tr>
                                <th>List</th>
                                <th>Nama Donatur</th>
                                <th>Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donatur_all as $dnt)
                            <tr>
                                <td><input type="checkbox" class=" align-content-center" name="donatur_id[{{ $dnt->id }}]" id="penerima" value="{{ $dnt->id}}"></td>
                                <td>{{ $dnt->nama_instansi }}</td>
                                <td>{{ $dnt->deskripsi }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
                        <form method="POST" action="/bantuanq" id="form-update" class="mb-5" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <input type="hidden" id="id" name="id">
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Judul Bantuan</label>
                                <input type="text" class="form-control @error('judul_bantuan') is-invalid
                                @enderror" id="judul_bantuan" name="judul_bantuan" value="{{ old('judul_bantuan') }}">
                                @error('judul_bantuan')
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


                            <div class="mb-3">
                                <label class="form-label">Jenis Bantuan</label>
                                <select class="form-select" name="jenis_bantuan_id" id="jenis_bantuan">
                                    @foreach ($jenis_bantuan as $jb )
                                    @if (old('jenis_bantuan_id') == $jb->id)
                                    <option value="{{ $jb->id }}" selected>{{ $jb->jenis_bantuan }}</option>
                                    @else
                                    <option value="{{ $jb->id }}">{{ $jb->jenis_bantuan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>




                            <div class="form-outline">
                                <label class="form-label" for="textAreaExample">Text Wa</label>
                                <textarea class="form-control @error('text_wa') is-invalid
                                @enderror" name="text_wa" id="text_wa" rows="4">{{ old('text_wa') }}</textarea>
                                @error('text_wa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Gambar Undangan</label>
                                <img class="edit_img-preview_undangan_wa img-fluid mb-3 lg-1" id="edit-img-wa">
                                <input class="form-control @error('gambar_undangan_wa') is-invalid
                                @enderror" type="file" id="edit_image_undangan_wa"  name="gambar_undangan_wa" onchange="previewEditImageUndangan()">
                                @error('gambar_undangan_wa')
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
                        <form method="POST" action="/bantuan" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Judul Bantuan</label>
                                <input type="text" class="form-control @error('judul_bantuan') is-invalid
                                @enderror" name="judul_bantuan" value="{{ old('judul_bantuan') }}">
                                @error('judul_bantuan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Post Image</label>
                                <img class="img-preview img-fluid mb-3 lg-1">
                                <input class="form-control  @error('image') is-invalid
                                @enderror"  type="file" id="image" name="gambar" onchange="previewImage()">
                                @error('image')
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
                                <label class="form-label">Jenis Bantuan</label>
                                <select class="form-select" name="jenis_bantuan_id">
                                    @foreach ($jenis_bantuan as $jb )
                                    @if (old('jenis_bantuan_id') == $jb->id)
                                    <option value="{{ $jb->id }}" selected>{{ $jb->jenis_bantuan }}</option>
                                    @else
                                    <option value="{{ $jb->id }}">{{ $jb->jenis_bantuan }}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-outline">
                                <label class="form-label" for="textAreaExample">Text Wa</label>
                                <textarea class="form-control @error('text_wa') is-invalid
                                @enderror" name="text_wa"  rows="4">{{ old('text_wa') }}</textarea>
                                @error('text_wa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Gambar Undangan</label>
                                <img class="img-preview_undangan_wa img-fluid mb-3 lg-1">
                                <input class="form-control @error('gambar_undangan_wa') is-invalid
                                @enderror" type="file" id="image_undangan_wa" name="gambar_undangan_wa" onchange="previewImageUndangan()">
                                @error('gambar_undangan_wa')
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









    @endsection


    @section('script')

    <script>

$(document).ready(function () {
    $('#table-display').DataTable();
});

        function tambah_donatur(id) {
            $('#form-donatur')[0].reset(); // reset form on modals
            $('.form-group').removeClass('has-error'); // clear error class
            $('.help-block').empty(); // clear error string
            $('.tambahDonaturModal').modal('show');

            //Ajax Load data from ajax
            //   $.ajax({
                //     url: "/detail_bantuan/"+id,
                //     type: "GET",
                //     dataType: "JSON",
                //     contentType: false,
                //     processData: false,
                //     success: function(data) {
                    //       $('[id="id"]').val(data.id);
                    //       $('[id="donatur"]').val(data.donatur);
                    //       $('[id="judul_bantuan"]').val(data.judul_bantuan);
                    //       $('#edit-img-detail').attr('src', 'storage/'+data.gambar);
                    //       $('[id="text_wa"]').val(data.text_wa);
                    //       $('[id="deskripsi"]').val(data.deskripsi);
                    //       $('[id="jenis_bantuan"]').val(data.jenis_bantuan_id);
                    //       $('#edit-img-wa-detail').attr('src', 'storage/'+data.gambar_undangan_wa);

                    //       $('.tambahDonaturModal').modal('show'); // show bootstrap modal when complete loaded
                    //       $('.modal-title-detail').text('Detail Bantuan'); // Set title to Bootstrap modal title

                    //     },
                    //     error: function(jqXHR, textStatus, errorThrown) {
                        //       alert('Error get data from ajax');
                        //     }
                        //   });
                    }


                    function edit(id) {
                        save_method = 'update';
                        $('#form-update')[0].reset(); // reset form on modals
                        $('.form-group').removeClass('has-error'); // clear error class
                        $('.help-block').empty(); // clear error string

                        //Ajax Load data from ajax
                        $.ajax({
                            url: "/edit/"+id,
                            type: "GET",
                            dataType: "JSON",
                            contentType: false,
                            processData: false,
                            success: function(data) {
                                $('[id="id"]').val(data.id);
                                $('[id="judul_bantuan"]').val(data.judul_bantuan);
                                $('#edit-img').attr('src', 'storage/'+data.gambar);
                                $('[id="text_wa"]').val(data.text_wa);
                                $('[id="deskripsi"]').val(data.deskripsi);
                                $('[id="jenis_bantuan"]').val(data.jenis_bantuan_id);
                                $('#edit-img-wa').attr('src', 'storage/'+data.gambar_undangan_wa);



                                $('#editModal').modal('show'); // show bootstrap modal when complete loaded
                                $('.modal-title-edit').text('Edit Pengguna'); // Set title to Bootstrap modal title

                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                alert('Error get data from ajax');
                            }
                        });
                    }


                </script>


                {{-- <script>
                    $(document).ready(function () {
                        // Setup - add a text input to each footer cell
                        $('#table-display thead tr')
                        .clone(true)
                        .addClass('filters')
                        .appendTo('#table-display thead');

                        var table = $('#table-display').DataTable({
                            orderCellsTop: true,
                            fixedHeader: true,
                            initComplete: function () {
                                var api = this.api();

                                // For each column
                                api
                                .columns()
                                .eq(0)
                                .each(function (colIdx) {
                                    // Set the header cell to contain the input element
                                    var cell = $('.filters th').eq(
                                    $(api.column(colIdx).header()).index()
                                    );
                                    var title = $(cell).text();
                                    $(cell).html('<input type="text" placeholder="' + title + '" />');

                                    // On every keypress in this input
                                    $(
                                    'input',
                                    $('.filters th').eq($(api.column(colIdx).header()).index())
                                    )
                                    .off('keyup change')
                                    .on('change', function (e) {
                                        // Get the search value
                                        $(this).attr('title', $(this).val());
                                        var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                        var cursorPosition = this.selectionStart;
                                        // Search the column for that value
                                        api
                                        .column(colIdx)
                                        .search(
                                        this.value != ''
                                        ? regexr.replace('{search}', '(((' + this.value + ')))')
                                        : '',
                                        this.value != '',
                                        this.value == ''
                                        )
                                        .draw();
                                    })
                                    .on('keyup', function (e) {
                                        e.stopPropagation();

                                        $(this).trigger('change');
                                        $(this)
                                        .focus()[0]
                                        .setSelectionRange(cursorPosition, cursorPosition);
                                    });
                                });
                            },
                        });
                    });
                </script> --}}
                {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                --}}

                @endsection






















