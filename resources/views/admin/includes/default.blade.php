<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.includes.essentialmeta')
    
    <!-- Import CSS -->
    @include('admin.includes.essentialcss')
  </head>
  <body class="hold-transition sidebar-mini layout-fixed"> 
    <div class="wrapper">
          @include('admin.includes.navbar')
          @include('admin.includes.sidebar')
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="">Product</a></li>
                      <li class="breadcrumb-item active"></li>
                    </ol>
                  </div>
                </div>
              </div><!-- /.container-fluid -->
            </section>

            <section class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    @yield('content') 
                  </div>
                </div>
              </div>
            </section>         
          </div>
          @include('admin.includes.footer')
    </div>   
    
    <!-- Import Javascript -->
    @include('admin.includes.essentialjs')

  </body>
</html>