
@extends('layouts.app')

@section('content')

<!DOCTYPE html>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Pagos en Linea Autos Colombia</title>
	
	<link rel="stylesheet" href="../../resources/theme/bootstrap.min.css" />
	<link rel="stylesheet" href="../../resources/theme/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="../../resources/fonts/stylesheet.css" />

	
    
    <header id="header">	
        <div class="container-fluid">
			<div class="row">
                
                <div class="text-center">
					<h1 class="label-header">Pagos en Linea Autos Colombia</h1>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                	<p class="iconoWhite">Comprobante de pago</p>
                </div>
            </div>
        </div>	
	</header>
<form id="form_ppal" name="form_ppal" method="post" action="/pagosWeb/vista/paginas/noFilterResponse.jsf" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="form_ppal" value="form_ppal" />

		<div class="container">
			<br />
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="row">
								<p class="text-center">
									<strong>INFORMACIÓN PAGO</strong>
								</p>
							</div>
						</div>

						<table class="table table-light">
      
					<div class="container">
		</div>


   <tbody>
   <img src="storage/img/Parking.png" class="img-responsive img-thumbnail mx-auto d-block" width="250">	
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-2">
									<div class="panel-body">
									<a href="{{ url('pago/edit') }}" class="btn btn-success">Imprimir Pago</a>
									<br>
									<br>
									<a href="{{ url('pago/') }}" class="btn btn-success">Registrar nuevo Pago</a>
									<br>
									<br>
									
									<a href="{{ url('ingreso/') }}" class="btn btn-success">Regresar</a>
<br>
									
									</div>
								</div>
								<div class="col-sm-2">
									<div class="panel-body">
									</div>
								</div>
								<div class="col-sm-2">
								
                                </button><script id="form_ppal:j_idt94_s" type="text/javascript">PrimeFaces.cw("CommandButton","widget_form_ppal_j_idt94",{id:"form_ppal:j_idt94"});</script>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="panel-body">
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<div class="img-responsive center-block">
									<img class="img-responsive center-block" src="https://www.placetopay.com/images/customers/PLACETOPAY.png" alt="Ir a PlaceToPay" style="text-align: center" />
								</div>
							</div>
							<br />
							
									<br />
									<
								</div>
								<br />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

</html>

@endsection