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

<h1 class="mb-3 text-center">Data Kecamatan</h1>

   <section class="content table-responsive">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tambah Data
      </button>
<table class="table table-striped " id="example">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kecamatan</th>
        <th colspan="3">pilihan</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($kecamatan as $kc )

        <tr>
            <td>{{ $loop->iteration }}</td>
          <td>{{ $kc->kecamatan }}</td>

          <td>

            <a href="/kecamatan/{{ $kc->id }}"  class="badge bg-info"><i class="fa-solid fa-circle-info"></i></a>
            <a href="/kecamatan/{{ $kc->id }}/edit"class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></span></a>
            <form action="/kecamatan/{{ $kc->id }}" method="POST" class=" d-inline">
                @method('delete')
                @csrf
                <button class=" badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                </form>
                <form action="/details/{{ $kc->id }}" method="POST" class=" d-inline">
                    @csrf
                    <input type="hidden" name="bantuan" value="{{ $kc->id }}">
                    <input type="hidden" name="donatur" value="{{ $kc->donatur }}">
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
            <div class="col-lg-8">
                <form method="POST" action="/kecamatan" class="mb-5" enctype="multipart/form-data">
                    @csrf
                     <div class="mb-3">
                      <label class="form-label">kecamatan</label>
                      <input type="text" id="kecamatan" class="form-control @error('kecamatan') is-invalid
                      @enderror" name="kecamatan" value="{{ old('kecamatan') }}">
                      @error('kecamatan')
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
    {{ $kecamatan->links() }}
  </div>



  <script>

    $(document).ready(function () {
        $('#example').DataTable({
            initComplete: function () {
                this.api()
                    .columns()
                    .every(function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });

                        column
                            .data()
                            .unique()
                            .sort()
                            .each(function (d, j) {
                                select.append('<option value="' + d + '">' + d + '</option>');
                            });
                    });
            },
        });
    });

       </script>






@endsection
