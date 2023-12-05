<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
<div class="content">
        {{-- Navbar --}}
        {{-- @include('Navigation.navbar') --}}
        {{-- End Navbar --}}

        {{-- Content Tabel --}}
        {{-- @include('Content.index') --}}
        {{-- End Content Tabel --}}
        <div class="col-lg-12">
            <div class="panel panel-default" style="padding: 20px">
                <div class="panel-heading" style="margin-bottom: 10px">
                    <a href="" class="btn btn-primary ">Tambah Data</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive table-bordered">
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Tahun Terbit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1; @endphp
                               @foreach ($buku as $item)
                               <tr>
                                <td>{{ $no++ }}</td>
                                   <td>{{ $item->title }}</td>
                                   <td>{{ $item->terbit }}</td>
                                   <td>
                                    <form action="#"
                                        method="post" enctype="multipart/form-data">
                                        @method('delete')
                                        @csrf

                                        <a href=""
                                            class="btn btn-success float-right">Ubah</a>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ini?');">Delete</button>
                                    </form>
                                   </td>
                               </tr>
                               @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
    </div>
    {{-- End Content --}}

    <!-- Modal -->

      <script type="text/javascript">
        $('#example').DataTable();
      </script>
</body>
</html>