<!DOCTYPE html>
<html lang="en">
    @include('admin.header')
  <body>
    <div class="container-scroller">
        @include('admin.sidebar')
         <!-- partial -->
         <div class="container-fluid page-body-wrapper">
           @include('admin.navbar')
           <div class="main-panel">
             
             <!-- content-wrapper ends -->
              @include('admin.footer')
           </div>
           <!-- main-panel ends -->
         </div>
         <!-- page-body-wrapper ends -->
       </div>
    @include('admin.script')
  </body>
</html>