<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Custom-Files -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css'); }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css'); }}">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
</head>
<body>


	@foreach ($libros as $libro)
	
	@if($loop->first)
		<div class="row shop-wthree-info text-center">
	@endif
	<div class="col-lg-3 shop-info-grid text-center mt-4">
            <div class="product-shoe-info shoe">
                <div class="men-thumb-item">
                    <img src="{{ URL::asset('images/'.$libro->nombre_imagen);}}" class="img-fluid" alt="">

                </div>
                <div class="item-info-product">
                    <h4>
                        <a href="/libro/{{ $libro->id; }}" >
						    @if (strlen($libro->nombre)<20)
						        {{$libro->nombre}}
						    @else
						    	{{substr($libro->nombre, 0, 20)."..."}}
						    @endif
                        </a>
                    </h4>

                    <div class="product_price">
                        <div class="grid-price">
                            <span class="money">
                            	<span class="line">${{$libro->precio}}</span> <br>
                            	${{ $libro->precio * (1-$libro->descuento); }}
                            </span>
                        </div>
                    </div>
                    <ul class="stars">
                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-star" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-star-half-o" aria-hidden="true"></span></a></li>
                        <li><a href="#"><span class="fa fa-star-o" aria-hidden="true"></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        @if($loop->last)
        	</div>
        @endif
	@endforeach
</body>
</html>