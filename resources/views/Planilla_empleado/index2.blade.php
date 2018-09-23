@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')

<!--<div class="box box-default collapsed-box"> -->  
<div class="box box-default">
	<div class="box-header with-border">
			<div class="row" >

				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
					<h3>Listado de Planillas <a href="planillas/create"><button class="btn btn-success">Agregar Nueva Planilla</button></a> </h3>

				</div>

			</div>
			<div class="box-tools pull-right">
			<!--	<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>   -->  
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>        
			</div>	
		</div>

		<!--<div class="box-body" style="display:none;">-->
		<div class="box-body" >
			<div class="box box-primary box-gris">
		


			
				<div class="box-body box-white ">

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@include('planillas.search')
						<div class="table-responsive" >

							<table class="table table-striped table-condensed table-hover">
							<!--<table class="table table-hover table-striped" cellspacing="0" width="80%">-->
								<thead>
									<th>ID</th>	
									<th>Proyecto</th>								
									<th>Periodo</th>
									<th>Mes</th>
									<th>Activo</th>
									<th>Año</th>
									<th></th>
								</thead>
								@foreach ($planilla as $proyec)
								<tr>
									<td>{{$proyec->ID}} </td>	
									<td>{{$proyec->Proyecto}} </td>								
									<td>{{$proyec->Periodo}} </td>
									<td>{{$proyec->Mes}} </td>
									<td>{{$proyec->Activo}} </td>
									<td>{{$proyec->Ano}}</td>															
									<td>
									<!--	<a href="{{URL::action('PlanillaController@edit',$proyec->ID)}}"><button class="btn btn-info" >Editar</button></a>
										-->
										<a href="{{URL::action('PlanillaController@edit',$proyec->ID)}}"><button class="btn btn-info" >Detalle</button></a>
										<a href=""data-target="#modal-delete-{{$proyec->ID}}" data-toggle="modal"><button class="btn btn-danger" >Anular</button></a>
									</td>
								<tr>
								@include('planillas.modal')
								@endforeach
							</table>
						</div>
						{{$planilla->render()}}
					</div>

				</div>
			
			</div>
		</div>
	</div>
</div>

@endsection