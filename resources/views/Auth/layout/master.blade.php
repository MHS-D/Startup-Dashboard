<!DOCTYPE html>
<html lang="en">

@include('Auth.layout.inc.header')
@include('inc.loader')

	<!--begin::Body-->
	<body id="kt_body" class="bg-dark">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
            @yield('content')
		</div>
		<!--end::Main-->
@routes()
@include('Auth.layout.inc.scripts')

	</body>
	<!--end::Body-->


</html>
