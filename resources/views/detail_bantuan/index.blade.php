@extends('layouts.main')

@section('container')


@if (session()->has('success'))
<div class="alert alert-success col-lg-9" role="alert">
    {{ session('success') }}
  </div>
@endif


{{-- <h1 class="mb-3 text-center">Penerima Bantuan dari {{ $donatur }}</h1> --}}
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
  <form action="/wa" method="post">
    @csrf
    <input type="hidden" name="bantuan" value="{{ $bantuan }}">



    <button class="btn btn-light" type="submit"><i class="fa-brands fa-square-whatsapp"></i> Send WA </button>
</form>
</div>
</div>
  {{-- <section class="content table-responsive mt-3">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Tambah Data
  </button>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#static">
    Tambah Data
  </button> --}}

<table class="table " id="table-display">
    <thead>
      <tr>
        <th>No</th>
        <th >Penerima</th>
        <th >Kecamatan</th>
        <th >Kelurahan</th>
        <th >Alamat</th>
        <th >No Hp</th>
        <th>pilihan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($detail as $dtl )

        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $dtl->penerima->nama}}</td>
          <td>{{$dtl->penerima->kecamatan->kecamatan}}</td>
          <td>{{$dtl->penerima->kelurahan->kelurahan }}</td>
          <td>{{$dtl->penerima->alamat }}</td>
          <td>{{ $dtl->penerima->nohp}}</td>

          <td>
            <button type="button"  class="btn btn-info btn-sm"  data-id="{{$dtl->id}}" onclick="detail({{ $dtl->id}})">
                <i class="fa-solid fa-circle-info"></i> Detail
              </button>

            {{-- <a href="/bantuan/{{ $dtl->id }}/edit"class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></span></a> --}}
            <form action="/deta/{{ $dtl->id }}" method="POST" class=" d-inline">
                @method('delete')
                @csrf
                <input type="hidden" name="id" class="form-control" value="{{ $dtl->id }}">
                <input type="hidden" name="bantuan" class="form-control" value="{{ $bantuan }}">
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i> Hapus</button>
                </form>
             </td>

            </tr>

        @endforeach

    </tbody>
  </table>
  </section>



        <!-- Modal detail -->
        <div class="modal fade detaildataModal"  >
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title-detail fs-5" >Modal title</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-lg-10">
                        <form id="form-detail-detail" class="mb-5" >

                              <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;"
                                 class="form-control border-0 bg-white disabled select" disabled id="nama_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->nama }}</option>
                                    @endforeach
                                   </select>
                               </div>


                               <div class="mb-3">
                                <label class="form-label">NIK</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="nik_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->nik }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">No KTP</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="noktp_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->noktp }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="tempat_lahir_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->tempat_lahir }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="tanggal_lahir_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->tanggal_lahir }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="jenis_kelamin_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->jenis_kelamin }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="alamat_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->alamat }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">No Hp</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="nohp_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->nohp }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">Pendapatan</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="status_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->status }}</option>
                                    @endforeach
                                   </select>
                               </div>

                               <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" class="form-control border-0 bg-white disabled select" disabled id="pendapatan_id">
                                    @foreach ($pnr as $p )
                                    <option style="appearance: none !important; -webkit-appearance: none !important; -moz-appearance: none !important;" value="{{ $p->id }}">{{ $p->pendapatan }}</option>
                                    @endforeach
                                   </select>
                               </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
              </div>
            </div>
          </div>














  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col-lg-12">
                <section class="content table-responsive mt-3">
                    <form method="POST" action="/detail/" class="mb-5" enctype="multipart/form-data">
                        @csrf
                <table class="table  " id="datatable-detail-bantuan">
                    <thead>
                      <tr>
                        <th >pilihan</th>
                        <th>No</th>
                        <th>No KTP</th>
                        <th>NIK</th>
                        <th>nama Lengkap</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>Status</th>
                        <th>Pendapatan</th>
                        <th>Sebab Kemiskinan</th>


                      </tr>
                    </thead>
                    <tbody>
                        <div class="mb-3">
                            <input type="hidden" name="bantuan" class="form-control" value="{{ $bantuan }}">
                          </div>
                        @foreach ($penerima as $pnr )
                        <tr>

                            <td>
                                <input type="checkbox" class=" align-content-center" name="penerima_id[{{ $pnr->id }}]" id="penerima" value="{{ $pnr->id}}">
                            </td>

                            <div class="mb-3">
                                <input type="hidden" name="bantuan_id[{{  $pnr->id }}]" class="form-control" value="{{ $bantuan }}">
                              </div>

                            {{-- <div class="mb-3">
                                <input type="hidden" name="kecamatan_id[{{ $pnr->id }}]" class="form-control" value="{{ $pnr->kecamatan_id}}">
                              </div>
                              <div class="mb-3">
                                <input type="hidden" name="kemiskinan_id[{{ $pnr->id }}]" class="form-control" value="{{ $pnr->kelurahan_id}}">
                              </div>
                              <div class="mb-3">
                                <input type="hidden" name="kelurahan_id[{{ $pnr->id }}]" class="form-control" value="{{ $pnr->kemiskinan_id}}">
                              </div> --}}

                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pnr->noktp}}</td>
                            <td>{{ $pnr->nik }}</td>
                            <td>{{ $pnr->nama }}</td>
                            <td>{{ $pnr->tempat_lahir }}</td>
                            <td>{{ $pnr->tanggal_lahir }}</td>
                            <td>{{ $pnr->jenis_kelamin }}</td>
                            <td>{{ $pnr->alamat }}</td>
                            <td>{{ $pnr->kecamatan->kecamatan }}</td>
                            <td>{{ $pnr->kelurahan->kelurahan }}</td>
                            <td>{{ $pnr->status }}</td>
                            <td>{{ $pnr->pendapatan }}</td>
                            <td>{{ $pnr->kemungkinan->kemungkinan }}</td>

                        </tr>

                        @endforeach

                    </tbody>
                </table>
                </section>







            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
              </div>
        </form>
        </div>

      </div>
    </div>












  {{-- <div class="d-flex justify-content-end">
    {{ $detail->links() }}
  </div> --}}






  @endsection


  @section('script')


<script>
$(document).ready(function () {
    $('#table-display').DataTable();

$('#datatable-detail-bantuan thead tr')
                        .clone(true)
                        .addClass('filters_detail-bantuan')
                        .appendTo('#datatable-detail-bantuan thead');

                        var table = $('#datatable-detail-bantuan').DataTable({
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
                                    var cell = $('.filters_detail-bantuan th').eq(
                                    $(api.column(colIdx).header()).index()
                                    );
                                    var title = $(cell).text();
                                    $(cell).html('<input type="text" class="form-control" placeholder="' + title + '" />');

                                    // On every keypress in this input
                                    $(
                                    'input',
                                    $('.filters_detail-bantuan th').eq($(api.column(colIdx).header()).index())
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

    function detail(id) {
          $('#form-detail-detail')[0].reset(); // reset form on modals
          $('.form-group').removeClass('has-error'); // clear error class
          $('.help-block').empty(); // clear error string

          //Ajax Load data from ajax
          $.ajax({
            url: "/detail_bantuan_bantuan/"+id,
            type: "GET",
            dataType: "JSON",
            contentType: false,
            processData: false,
            success: function(data) {
              $('[id="id"]').val(data.id);
              $('[id="nama_id"]').val(data.penerima_id);
              $('[id="nik_id"]').val(data.penerima_id);
              $('[id="tempat_lahir_id"]').val(data.penerima_id);
              $('[id="tanggal_lahir_id"]').val(data.penerima_id);
              $('[id="jenis_kelamin_id"]').val(data.penerima_id);
              $('[id="alamat_id"]').val(data.penerima_id);
              $('[id="nohp_id"]').val(data.penerima_id);
              $('[id="pendapatan_id"]').val(data.penerima_id);
              $('[id="status_id"]').val(data.penerima_id);

            //   $('#edit-img-wa-detail').attr('src', 'storage/'+data.gambar_undangan_wa);

              $('.detaildataModal').modal('show'); // show bootstrap modal when complete loaded
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
        url: "/edit/"+id,
        type: "GET",
        dataType: "JSON",
        contentType: false,
        processData: false,
        success: function(data) {
          $('[id="id"]').val(data.id);
          $('[id="donatur"]').val(data.donatur);
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> --}}


@endsection






















