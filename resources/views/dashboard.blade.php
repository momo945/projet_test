<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>administrateur</title>
            <!-- plugins:css -->
            <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
     
            <link rel="stylesheet" href="admin/assets/css/style.css">
            <!-- End layout styles -->
            <link rel="shortcut icon" href="admin/assets/images/favicon.ico" />
          </head>
          <body>
              <div class="container-fluid page-body-wrapper">
                <nav class="sidebar sidebar-offcanvas" id="sidebar">
                  <ul class="nav">
                    <li class="nav-item sidebar-actions">
                      <span class="nav-link">
                        <a href="{{url('cree_taches')}}" class="btn btn-primary btn-md active btn-gradient-primary mt-3 bi-person-plus" role="button" aria-pressed="true">Cree une nouvelles taches </a>
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
                            <h4 class="card-title">Mes taches </h4>
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  @if(session()->has('message'))
                                  <div class="alert alert-success">
                                   {{ session()->get('message') }}
                                   </div>
                                @endif
                                  <tr>
                                    <th>titre</th>
                                    <th>description</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($tache as $task)
                                  <!--recuperation des donnes e notre BD-->
                                  <tr>
                                    <td>{{$task->titre}}</td>
                                    <td> {{$task->description}}</td>
                                    <td>
                                      <label class="badge badge-gradient-success"></label>
                                    </td>
                                    <td> <td><a href="{{url('update',$task->id)}}" class="btn btn-primary btn-sm">modifier</a></td></td>
                                    <td><a href="{{url('supprimer',$task->id)}}" class="btn btn-primary btn-sm">Supprimer</a></td>
                                  </tr>
                               @endforeach
                                </tbody>
                              </table>
                            </div>
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
