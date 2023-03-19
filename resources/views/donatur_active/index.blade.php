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
<div class="col-5 text-end">
    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="far fa-plus"></i> Tambah</button>
    {{-- <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModalList"><i class="far fa-plus"></i> List</button> --}}
</div>
</div>
    <table class="table table-striped ">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Deskripsi</th>

                <th colspan="3">pilihan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dna as $dn )

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dn->donatur->nama_instansi }}</td>
                <td>{{ $dn->donatur->deskripsi }}</td>

                <td>

                    <a href="/kemiskinan/{{ $dn->id }}"  class="badge bg-info"><i class="fa-solid fa-circle-info"></i></a>
                    <a href="/kemiskinan/{{ $dn->id }}/edit"class="badge bg-warning"><i class="fa-solid fa-pen-to-square"></i></span></a>
                    <form action="/kemiskinan/{{ $dn->id }}" method="POST" class=" d-inline">
                        @method('delete')
                        @csrf
                        <button class=" badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                    <form action="/details/{{ $dn->id }}" method="POST" class=" d-inline">
                        @csrf
                        <input type="hidden" name="bantuan" value="{{ $dn->id }}">
                        <input type="hidden" name="donatur" value="{{ $dn->donatur }}">
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
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-lg-12">
                    <section class="content table-responsive mt-3">
                        <form method="POST" action="/donatur-actives/" class="mb-5" enctype="multipart/form-data">
                            @csrf
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th colspan="1">pilihan</th>
                                        <th scope="col">No</th>


                                        <th scope="col">nama Lengkap</th>
                                        <th scope="col">Deskripsi</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <div class="mb-3">
                                        <input type="hidden" name="bantuan" class="form-control" value="{{ $btn }}">
                                    </div>
                                    @foreach ($donatur as $dnr )
                                    <tr>

                                        <td>
                                            <input type="checkbox" class=" align-content-center" name="donatur_id[{{ $dnr->id }}]" id="donatur" value="{{ $dnr->id}}">
                                        </td>

                                        <div class="mb-3">
                                            <input type="hidden" name="bantuan_id[{{  $dnr->id }}]" class="form-control" value="{{ $btn }}">
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

                                        <td>{{ $dnr->nama_instansi }}</td>
                                        <td>{{ $dnr->deskripsi }}</td>



                                        <td>


                                        </td>
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











        @endsection
