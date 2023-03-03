<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Cree une taches</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
        
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="admin/assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="admin/assets/images/favicon.ico" />
      </head>
      <style>
        label{
          display: inline-block;
          width: 100px;
        }
      </style>
      <body>
    
          <!-- partial:partials/_navbar.html -->
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <ul class="nav">
                <li class="nav-item sidebar-actions">
                  <span class="nav-link">
                    <div class="border-bottom">
                      <h6 class="font-weight-normal mb-2">Cree un taches</h6>
                    </div>
                    <a href="{{url('dashboard')}}" class="btn btn-primary btn-lg active btn-gradient-primary mt-4" role="button" aria-pressed="true">Dashboard</a>
                  </span>
                </li>
              </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
        
              <div class="content-wrapper">
              
                <div class="row">
                  <!--afficchage base de donned-->
                </div>
                <div class="row">
                  <div class="col-12 grid-margin">
                    <div class="card">
                         <div class="card-body">
                             
                         </div>
                         <div class="container">
                         <form action="{{url('update/{id}')}}" method="POST" enctype="multipart/form-data">
                           @csrf
                         <div style ='padding-top:20px;' >
                                 <label for="">Titre</label>
                                 <input type="text" name="titre" placeholder="titre" >
                             </div>
                             <div style ='padding-top:20px;' >
                                 <label for="">Description</label>
                                 <textarea name="description" id="description" class="form-control" rows="6" placeholder="Description"></textarea>

                             </div>
                             <div style ='padding-top:20px;' >
                                 <input type="submit" class="btn btn-primary" value="enregistrer"> 
                                 
                             </div>
                         </form>
                         @if(session()->has('message'))
                           <div class="alert alert-success">
                            {{ session()->get('message') }}
                            </div>
                         @endif
                         </div>
                    </div>
                  </div>
                </div>
                
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
        <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="admin/assets/js/off-canvas.js"></script>
        <script src="admin/assets/js/hoverable-collapse.js"></script>
        <script src="admin/assets/js/misc.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="admin/assets/js/dashboard.js"></script>
        <script src="admin/assets/js/todolist.js"></script>
        <!-- End custom js for this page -->
      </body>
    </html>
    </x-app-layout>
    