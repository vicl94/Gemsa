@extends('template.main')
@section('content')

	@include('includes.styledropzone')

	<div class="container">
		
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-12">
			
			
			<div id="test"class="alert alert-info" role="alert">Selecciona un archivo</div>

			<div id="actions" class="row">

		      <div class="col-lg-7">

		        <span class="btn btn-success fileinput-button">
		            <i class="glyphicon glyphicon-plus"></i>
		            <span>Agregar Archivos...</span>
		        </span>
		        <button type="submit" class="btn btn-primary start">
		            <i class="glyphicon glyphicon-upload"></i>
		            <span>Subir todos los archivos</span>
		        </button>
		        <button type="reset" class="btn btn-warning cancel">
		            <i class="glyphicon glyphicon-ban-circle"></i>
		            <span>Cancelar subida</span>
		        </button>
		      </div>

		      <div class="col-lg-5">

		        <span class="fileupload-process">
		          <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
		            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
		          </div>
		        </span>
		      </div>

		    </div>

		    <div class="table table-striped" class="files" id="previews">

		      <div id="template" class="file-row">
		        <!-- This is used as the file preview template -->
		        <div>
		            <span class="preview"><img data-dz-thumbnail /></span>
		        </div>
		        <div>
		            <p class="name" data-dz-name></p>
		            <strong class="error text-danger" data-dz-errormessage></strong>
		        </div>
		        <div>
		            <p class="size" data-dz-size></p>
		            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
		              <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
		            </div>
		        </div>
		        <div>
		          <button class="btn btn-primary start">
		              <i class="glyphicon glyphicon-upload"></i>
		              <span>Comenzar</span>
		          </button>
		          <button data-dz-remove class="btn btn-warning cancel">
		              <i class="glyphicon glyphicon-ban-circle"></i>
		              <span>Cancelar</span>
		          </button>
		          <button data-dz-remove class="btn btn-danger delete">
		            <i class="glyphicon glyphicon-trash"></i>
		            <span>Quitar</span>
		          </button>
		        </div>
		      </div>

		    </div>

			<!--
			{{Form::open(array(
				'url'=>'images/upload',
				'files'=> true,
				'class'=>'dropzone',
				'id'=> 'my-dropzone,',
				'method'=>'post',
				))
			}}
			
			{{Form::close()}}
			-->
			
		</div>

	</div>
			

@stop