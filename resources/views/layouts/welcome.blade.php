<!DOCTYPE html>
<html lang="en">

@include('layouts._header')

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
	<div id="container" class="effect mainnav-lg">

		<!--NAVBAR-->
		<!--===================================================-->
		@include('layouts._navbar')
		<!--===================================================-->
		<!--END NAVBAR-->

		<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			@yield('content')
			<!--===================================================-->
			<!--END CONTENT CONTAINER-->



			<!--MAIN NAVIGATION-->
			<!--===================================================-->
			@include('layouts._sidenav')
			<!--===================================================-->
			<!--END MAIN NAVIGATION-->

			<!--ASIDE-->
			<!--===================================================-->
			{{--  @include('layouts._aside.blade.php')  --}}
			<!--===================================================-->
			<!--END ASIDE-->

		</div>



		<!-- FOOTER -->
		<!--===================================================-->
		@include('layouts._footer')
		<!--===================================================-->
		<!-- END FOOTER -->


		<!-- SCROLL TOP BUTTON -->
		<!--===================================================-->
		<button id="scroll-top" class="btn">
			<i class="fa fa-chevron-up"></i>
		</button>
		<!--===================================================-->



	</div>
	<!--===================================================-->
	<!-- END OF CONTAINER -->




	<!-- SETTINGS - DEMO PURPOSE ONLY -->
	<!--===================================================-->
	{{--  @include('layouts.demo_setting')  --}}
	<!--===================================================-->
	<!-- END SETTINGS -->


	<!--JAVASCRIPT-->
	<!--=================================================-->

	<!--jQuery [ REQUIRED ]-->
	<script src="{{asset('js/jquery-2.2.1.min.js')}}"></script>


	<!--BootstrapJS [ RECOMMENDED ]-->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>


	<!--Fast Click [ OPTIONAL ]-->
	<script src="{{asset('plugins/fast-click/fastclick.min.js')}}"></script>


	<!--Nifty Admin [ RECOMMENDED ]-->
	<script src="{{asset('js/nifty.min.js')}}"></script>


	<!--Morris.js [ OPTIONAL ]-->
	<script src="{{asset('plugins/morris-js/morris.min.js')}}"></script>
	<script src="{{asset('plugins/morris-js/raphael-js/raphael.min.js')}}"></script>

	<!--DataTables [ OPTIONAL ]-->
    <script src="{{asset('plugins/datatables/media/js/jquery.dataTables.js')}}"></script>
	<script src="{{asset('plugins/datatables/media/js/dataTables.bootstrap.js')}}"></script>
	<script src="{{asset('plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>

	<!--DataTables Sample [ SAMPLE ]-->
    <script src="{{asset('js/demo/tables-datatables.js')}}"></script>


	<!--Sparkline [ OPTIONAL ]-->
	<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>


	<!--Skycons [ OPTIONAL ]-->
	<script src="{{asset('plugins/skycons/skycons.min.js')}}"></script>


	<!--Switchery [ OPTIONAL ]-->
	<script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>


	<!--Bootstrap Select [ OPTIONAL ]-->
	<script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>


	<!--

    REQUIRED
    You must include this in your project.

    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.

    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.

    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.

    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    -->


</body>

</html>