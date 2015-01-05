@extends('template.main')

@section('content')
	<h1>Bienvenido {{Auth::user()->name}}</h1>
	<a href="salir"><button class="btn btn-danger" type="button">Salir</button></a>
@stop

@section('right_sidebar')
	<div class="col-lg-3 ds">
	    <!--COMPLETED ACTIONS DONUTS CHART-->

	    <h3>Actividad Reciente</h3><!-- First Action -->

	    <div class="desc">
	        <div class="thumb">
	            <span class="badge bg-theme fa fa-clock-o"
	            style="font-style: italic"></span>
	        </div>

	        <div class="details">
	            <p>2 Minutes Ago<br>
	            <a href="#">James Brown</a> subscribed to your
	            newsletter.<br></p>
	        </div>
	    </div><!-- Second Action -->

	    <div class="desc">
	        <div class="thumb">
	            <span class="badge bg-theme fa fa-clock-o"
	            style="font-style: italic"></span>
	        </div>

	        <div class="details">
	            <p>3 Hours Ago<br>
	            <a href="#">Diana Kennedy</a> purchased a year
	            subscription.<br></p>
	        </div>
	    </div><!-- Third Action -->

	    <div class="desc">
	        <div class="thumb">
	            <span class="badge bg-theme fa fa-clock-o"
	            style="font-style: italic"></span>
	        </div>

	        <div class="details">
	            <p>7 Hours Ago<br>
	            <a href="#">Brandon Page</a> purchased a year
	            subscription.<br></p>
	        </div>
	    </div><!-- Fourth Action -->

	    <div class="desc">
	        <div class="thumb">
	            <span class="badge bg-theme fa fa-clock-o"
	            style="font-style: italic"></span>
	        </div>

	        <div class="details">
	            <p>11 Hours Ago<br>
	            <a href="#">Mark Twain</a> commented your
	            post.<br></p>
	        </div>
	    </div><!-- Fifth Action -->

	    <div class="desc">
	        <div class="thumb">
	            <span class="badge bg-theme fa fa-clock-o"
	            style="font-style: italic"></span>
	        </div>

	        <div class="details">
	            <p>18 Hours Ago<br>
	            <a href="#">Daniel Pratt</a> purchased a wallet
	            in your store.<br></p>
	        </div>
	    </div><!-- USERS ONLINE SECTION -->

	    <h3>Miembros</h3><!-- First Member -->

	    <div class="desc">
	        <div class="thumb"><img align="" class="img-circle"
	        height="35px" src="assets/img/ui-divya.jpg" width=
	        "35px"></div>

	        <div class="details">
	            <p><a href="#">HBazail</a><br>
	            Disponible</p>
	        </div>
	    </div><!-- Second Member -->

	    <div class="desc">
	        <div class="thumb"><img align="" class="img-circle"
	        height="35px" src="assets/img/ui-sherman.jpg"
	        width="35px"></div>

	        <div class="details">
	            <p><a href="#">HeBazail</a><br>
	            Ocupado</p>
	        </div>
	    </div><!-- Third Member -->

	    <div class="desc">
	        <div class="thumb"><img align="" class="img-circle"
	        height="35px" src="assets/img/ui-danro.jpg" width=
	        "35px"></div>

	        <div class="details">
	            <p><a href="#">RGama</a><br>
	            Disponible</p>
	        </div>
	    </div><!-- Fourth Member -->

	    <div class="desc">
	        <div class="thumb"><img align="" class="img-circle"
	        height="35px" src="assets/img/ui-zac.jpg" width=
	        "35px"></div>

	        <div class="details">
	            <p><a href="#">PEstrella</a><br>
	            Disponible</p>
	        </div>
	    </div><!-- Fifth Member -->

	    <div class="desc">
	        <div class="thumb"><img align="" class="img-circle"
	        height="35px" src="assets/img/logo.png" width=
	        "35px"></div>

	        <div class="details">
	            <p><a href="#">DGarcia</a><br>
	            Ocupado</p>
	        </div>
	    </div><!-- CALENDAR-->

	    <div class="mb" id="calendar">
	        <div class="panel green-panel no-margin">
	            <div class="panel-body">
	                <div class="popover top" id="date-popover"
	                style=
	                "cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
	                <div class="arrow"></div>

	                    <h3 class="popover-title" style=
	                    "disadding: none;"></h3>

	                    <div class="popover-content" id=
	                    "date-popover-content"></div>
	                </div>

	                <div id="my-calendar"></div>
	            </div>
	        </div>
	    </div><!-- / calendar -->
	</div><!-- /col-lg-3 -->
@stop