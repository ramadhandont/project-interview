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

				<h3>Detail Product</h3>

				
                <a href="{{ URL::to('/') }}"> List Product</a>

				<br/>
				<br/>


                @foreach($produk as $p)
                <form action="{{ URL::to('/product/update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Brand</label>
                        
                        <select class="form-control" id="exampleFormControlSelect1" name="brand"disabled>   
                        
                            <option value="{{ $p->brand }}">{{ $p->brand }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        
                        <select class="form-control" id="exampleFormControlSelect1" name="model"disabled>   
                            <option value="{{ $p->model }}">{{ $p->model }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fuel</label>
                        <input type="text" class="form-control" id="exampleCheck1" name="fuel" value="{{ $p->bbm }}"disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" id="exampleCheck1" name="price" value="{{ $p->harga }}"disabled>
                        <input type="hidden" class="form-control" id="exampleCheck1" name="id" value="{{ $p->product_id }}">
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">File Gambar</label>
						<input type="file" name="file" class="form-control" disabled>
                        <img src="{{ URL::to('/data_file/') }}/{{ $p->foto }}"/>
					</div>
                </form>
	            @endforeach
			</div>
		</div>
	</div>


</body>
</html>