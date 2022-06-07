 <!--begin::Javascript-->

 {{-- Master Layout --}}
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src={{ asset("dashboard/plugins/global/plugins.bundle.js") }}></script>
<script src={{ asset("dashboard/js/scripts.bundle.js") }}></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src={{ asset("dashboard/plugins/custom/datatables/datatables.bundle.js") }}></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
{{-- <script src={{ asset("dashboard/js/custom/apps/user-management/users/list/table.js") }}></script> --}}
{{-- <script src={{ asset("dashboard/js/custom/apps/user-management/users/list/export-users.js") }}></script> --}}
{{-- <script src={{ asset("dashboard/js/custom/apps/user-management/users/list/add.js") }}></script> --}}
<script src={{ asset("dashboard/js/widgets.bundle.js") }}></script>
<script src={{ asset("dashboard/js/custom/widgets.js") }}></script>
<script src={{ asset("dashboard/js/custom/apps/chat/chat.js") }}></script>

{{-- profile page --}}
@if(Request::is('dashboard/Profile'))
<script src={{ asset("dashboard/js/custom/account/settings/signin-methods.js") }}></script>
@endif

{{-- users page --}}
@if(Request::is('dashboard/Users'))
<script src={{ asset("dashboard/js/custom/utilities/search/horizontal.js") }}></script>
<script src={{ asset("dashboard/js/custom/apps/projects/users/users.js") }}></script>
@endif

<!--end::Page Custom Javascript-->
<!--end::Javascript-->

 {{-- Custom Js --}}
 <script src={{ asset("dashboard/js/MHS/Core.js") }}></script>

 @if($errors->any())
     @foreach ($errors->all() as $error)
         <script>
             toastr.error('{{ $error }}');
         </script>
     @endforeach
 @endif

