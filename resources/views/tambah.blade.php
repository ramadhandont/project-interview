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

				<h3>Tambah Product</h3>

				
                <a href="{{ URL::to('/') }}"> List Product</a>

				<br/>
				<br/>


                <form action="{{ URL::to('/product/save') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Brand</label>
                        
                        <select class="form-control" id="exampleFormControlSelect1" name="brand">    
                        @foreach($brand as $p)
                        
                            <option value="{{ $p->brand_nm }}">{{ $p->brand_id }} - {{ $p->brand_nm }}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Model</label>
                        
                        <select class="form-control" id="exampleFormControlSelect1" name="model">    
                        @foreach($model as $p)
                        
                            <option value="{{ $p->model_nm }}">{{ $p->model_id }} - {{ $p->model_nm }}</option>
                        @endforeach
                        </select>
                    </div>
                    <!-- --
                    <div class="form-group">
                        <label for="exampleInputEmail1">Variant</label>
                        
                        <select class="form-control" id="exampleFormControlSelect1">    
                        @foreach($variant as $p)
                        
                            <option value="{{ $p->variant_id }}">{{ $p->variant_id }} - {{ $p->variant_nm }}</option>
                        @endforeach
                        </select>
                    </div>
                    <!-- -->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fuel</label>
                        <input type="text" class="form-control" id="exampleCheck1" name="fuel">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Price</label>
                        <input type="text" class="form-control" id="exampleCheck1" name="price">
                    </div>
					<div class="form-group">
                        <label for="exampleInputEmail1">File Gambar</label>
						<input type="file" name="file" class="form-control">
					</div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
			</div>
		</div>
	</div>


</body>
</html>