



<!DOCTYPE html>
<html>
<head>
	<title>Project - Interview</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				

				<h2 class="text-center"><a href="https://www.mobilkamu.com">www.mobilkamu.com</a></h2>

				<h3>Data Product</h3>

                <a href="{{ URL::to('/product/tambah') }}"> + Tambah Product Baru</a>
                <?php /* * ?>
				<p>Cari Data Pegawai :</p>

				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>
                <?php /* */ ?>
				<br/>

				<br/>
				<table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($product as $p)
                    <tr>
                        <td>{{ $p->brand }} {{ $p->model }}</td>
                        <td>{{ $p->harga }}</td>
                        <td>
                            <a href="{{ URL::to('/product/detail') }}/{{ $p->product_id }}">Detail</a>
                            |
                            <a href="{{ URL::to('/product/edit') }}/{{ $p->product_id }}">Edit</a>
                            |
                            <a href="{{ URL::to('/product/hapus') }}/{{ $p->product_id }}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
				</table>
                <?php /* * ?>
				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				<br/>

				{{ $pegawai->links() }}
                <?php /* */ ?>
			</div>
		</div>
	</div>


</body>
</html>