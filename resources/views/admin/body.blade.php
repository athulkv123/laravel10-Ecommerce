<div class="container-scroller">
   @include('admin.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
   @include('admin.navbar')
      <div class="main-panel">
        @include('admin.content')
         @include('admin.footer')
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>