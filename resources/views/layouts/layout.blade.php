<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Vicente | juan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Incons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu mt-3" style="width:auto !important; margin-left: 0%;">
             
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-block btn-flat ml-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">{{ __('Cerrar sesión') }}</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                </div>
              </li>
            </ul>
          </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAO0AAADVCAMAAACMuod9AAAAXVBMVEX///9Twd5Lv91AvNxNv91Fvtw8vNvL6vPE5/Lp9vrw+fz1+/1syOKN0+ec2Or6/f7a8PeR1Oh+zuWp3exfxODi8/jU7fW14e90y+OZ1+mw3+664/DJ6fN8zeRmxuHYFf+lAAATEElEQVR4nO1d67aqug6eFIqgiAqIeH3/x9yANkkv0BYRx9rD7885e025hKa5J/37++GHH3744Ycffvjhhx9+mAW7dF/X+3Q35z03++R0KU9JvZnzrm9jdQhC3iNkTb6ag+TjqWDtPVkHHlb5cYZ7zoFNznkUIBiPs9P6rVse8yBm9J4RCx/1TO/7Fi4hC1RELG6SyXe8VrF+yyAKi1m3yRTsMq6/WP9ynOdTtts659KqUqZhX2bnTWBYBXi7+ODL0OuDaVnhC8b7j1DhiF0wsAxIr8/67vIxWjuE6cdoseMxTmxHb1g63+3ELbR2AuF7ezeX3q7TFZFOPmNu8mpf6RIgarUPl75B1HyYpkEcQ3wJzou8LPNtFetChmcO/LeN1ctYHBXldbVKyibEv4XTZf17QD5m1Qr+dV9Wmk6KL5Zb1Uy5pFVhJ/xGmy1+WPYhaiy4Aefxs/yXtIy4vFL8Mbq821hmYB5cFGl+A3KZuyCYE5UgiOf6H2+ZQkB8HbzRUVZjUfhY6T8i5M5IgzP24vHR3fx3utu6b3IfEKcnacdGfMBEBJHIh7/b57AV7xgOqdS9bGdFkdE2KKQf8cCwrk/AfbJZ3t8PglPH9tFN5tH4pP1iLf0iCkfEWSI+yxdMjBU8e1Tf5xKbhlvlz7X057gYtbxg49ok/Pw4vNYkUglQkD4op7KHRM+FirKIDTLxE6V45PIWBmw0q9t5oesXMcKGh5AQa3foUvHzeGnzcS2eHNp/m1Zkb0YhfJ47p//sIGmFzrN/4ZkB29asfhScKce+6No9yDdglYtvKJTQ4hu39HvwitpWvVu0oc6iJr2G7vJihOKNN5+CrSdTrSk380OreQhG7Cz5JmL7VNNffBKERxA7RyeoFcG3ZGUj9wCMuEU87aUnI/Z/bkk2L+FiVrmHN5rXdQvbF5sXT0U+PLWSHYUXsT7K8/AdoQyqz0kkCxy5FtrgXgJHyEa+rEu/F9Lx4HXZWiU2PNsvIrgKTaAb3J9E/aKWGVzbMewqaXU9QnQ9RABhYY9++mMbKqB8PdWpH/lNCO/L36qhQVnvbyU2EPPbQO8imbqB5Ai0i3FMcZwmLt7FVHHRKKHF2OLkKQBq3SzNuTBxbbdaMiD2SmR9i9pJ+7Y05AO5T2LsS5y8miKTE7SlcI2jwOMOX5JSU1TBHonlOepdnxAiPNbPKHkXE2ypNbIx2/6tGf0vV0xiqfeR+vvVuJq9I0BSZqGzqEu+E7zYxL5siLrn5TfVyNjOKfeToHbhdIF41cjx9znwcRS9IoZXXF1XwSwCU/w26aUnA9Iibj+/EQkFnjj5Ao5uMsSHFq6/yLwiNSnZpMQRvwN3O0qqRtxk4dyI31fGyIwccEPJ5WYxw68XDp/nPlGEAtdQ1lhEKzmZkIJFlk7hglvgoPlOQBNTRThaHC42ldgQi+c09+4K90go0jiQfAn7nervOAUtDwoS7NKUbFoDtyKXc6uRcfJgqHnhlr79o+SYi39QUsU2SXv+krrF+JJNKBNWNfPfGhndxidC7fHFqztzN38+RVpQtOx6iP+q8XtYfAyPLOrMSNwkBomoZo8q4mEch4A45iyoGvhFEI4GbtIpCYp5gOaR6a+bY30tD/dKSg4YiiDVf2VBs82vq6MxNXT7lkj+I2JKerPdMSm3Ge87AiJLPa8RUV/JGYaPbZnsZaIdN89HIBiQC+47Jvk9eJH5Pnqqu56MBERS9q1ChD+Snc9bQq+HR8zt5cUT0NIcV4drJ/m/VmTyRyovqiaeaT2H0K4zDzPhiHxBSLU7lBiESwCk2cJJoCeOk98aMekGy5fCrbZ8oDPGRB/ru8BaRRu36rV6ZE88qiqIePev3Z/Vcuwxcvl2QdPxVoR6kn2E2OKa1PtjuhkQLrt1eqxv1wutFbPcvv1IRbKErKq38TipneIIq4K8muOdS4xK3h+xTfK1ZlnhlzLzRpqzYTXTK8jonl/rNfq/rb5w1o5gZXbG0nqf5EWrvkdojjjLPxegWjVDzUk9odn5isYPLrV7NgHdfrCXW9Msb8JwuNktbj6zha/BoFyKWvUvO2HYKeTKx2NXpUn+GHp2wKPZZfSuHDOUNFMO/bzQy8oLhnVqNryJ2bT+yCHsSkPXace+4nGqU5LBi/jVX2JQTo1jgM8fmZiahefZ6DWta68DoNKfyxfAvwfcU01A8l4NK4oYZ1R1+k9/HxbPY2ElkXbv1lo49HIEqJV1AQbWvLNTeKkcxBKM3Afg6oPBA2EzpMJSrZu4XdWtIA4MdYmVz/Am/nFfZAspQg6MHL6k4WqrWzi8ejM9VKq9hCx8kE8IzW00UpQObj4X4JanrHmCDwj/tEsyVZpE8TsVClJDwJPWs6xpBGE05glxpknOivlbiTIr+ZbpWWVoZu6wcsFFXtiIB1qIREgVkjJYYT5v0lPRgMRaXgiChWps9RQoDD1VWsktZxGvDMFvQw8U6MzxAOIwMJoOurrUGRmQyKE+teXIDWuZi3lgttAEtSAQwZUZ6VFK961PNPhOIAwwEQZGhzElslK6sv2D63Lh9LB0h5avx/O/d+gNmEXUMc/ifu5JGGwHsqEgqERmCOLrQ1lqRUv69l/vaRfW2F7YKy8C2scsopKKzCgZGomBguplnIB0GNZopdT+au3lllDTDoDxtndY/p46TOqYEsrHStWR5pEJB/mTQQRszH5YN1KbnEcWcE+7OyzVTCBAevIgoWeyojTl3f/QIFTIdujKOkDZjucTE6nDyjnCTuoDAlZZLIQ1VbngoZqioPcBj9EgVFDUdUZaZbTYdGwa8oTY1e8lmSqHljMonW+IYWFw9NTSZLIOOrmgxuIjyih7RQttOXI05EgRsUvLGVi2cYo7QNc+xZh/rJUh4byF+1/hETUn3ctuxbE4fMAxpAQqN2/Iiig4jQZkH9pNoSKfA+FOya4URb5TDRZZWTebE+IrEBfVS0/WpjYvsriaCEUViIUMTr7yGqOzDu+PRpprsDDVKNEL5O6WALF+RaFe4Zq1XcPq2ll/B9/UtU2UyCaxGprfdRxfWlN5tfYNnQtdMY9urUYB3TahRlpAH4BxsCytiU238jWRvreHACWk1ioyjGA735wEj5/fSbcZ7TkjvYJQ2eo+jYqwCyzVn8AFXiVJF3mGh7a0tZ1aQ03dWbqrT2kj2GKWMjII7Xl54ju6DIalLUd0LayddtWGGr5+5W9CTVgmYwh73DNHSpfBoCg0+WpAqBc65+N3HUHqVlkFpSN+DjERoCZPr3Kg1mAWbshdPVtiqtd148Xi4r18y51x9fRdSw2WEWoNcR1cXN/oJRSLj64aUOt3c5RDRhvAJY1vojaFC30LS6D+c1RJQ7uAZyQLFaopF+KSyDcVQaE48G2bKJzWFn7lV4BFd5hBeNrHPhrfiwjlgflkgxDXGWQfAZR8+UkFqmJ0VWJoRNVhmEBGJb3fxoVGMsPLEIAROP4zFdIIKX1xLy5iSrtqQ7W4XyUnRELHE6oY8PLR5ld5tJv296MUwTTCwExni4U2DJhnY3OJ7+Lu4xwvQ9anhg9lX1ldUCh2ss/nx6iChQj0Z9yzkXtl6XRlbTcddSdE8YE89hbESeyyDT+mc/pINQz1Kzc2VtYtVc2/dc58Y3QstOotTBe7jmfYaK66Ll9zy+LqS6vHLhwtDDRJDLFADagcHUOypRaXMtRIjROrpwNpy5TzSnXAQI2T1iJRFbfsEfj/B6jy0Z+j7m0JhjgJ3moPZLvU55CYox7aM4HMaXDJHoGJHB/rEfFwGibXEITBlHeDvOOghGgCyzG0k+Emc8gV0OA27AID15VD5DLDhgSdFh9RLtidbporcO3XprPbrZnuDU3A4dxdw4cdWF1uUHVgrvTVZWh4Wt6b5oHcdnmHlNpGlggVJuC6/4JgqylotjdUXEfG3LCc44NvOO6rrOjtY4+gnWTqhdsx1x4ScL0cJqLU9GN1Qn8UZyaXDPTVy54UzxiL+u4K6Z29KsX2UlxtZCo9kPfiHOA6s6W36Qqcn+8eMR4XxsVCm/HlLDskcK9SHtx/khO9ejg9D9G9l6hBq2nIRt2XRRCHIcvOyYBIgDSKEEuQwBhKztdynYnnHKc/dYxzMHSoBFNejNgang44vrpecAUVhkatcpRnjntMwyRopO/FwtzARqhsYSUxJzexAQ00AsrHsaKaY6E4S1Pqpf5k7fWkdzjBgyYpGNp+EXgAViEQ1QTvoEqDWpklP7kWTj8zgcVbhUkg1EHkGJgYk9rb0cegKe9SEQ8vJJWiwxl7p6OxUO4WhRlVv8hhhMtRC7mPpCVPNLoWOBYbP0GqnDnVKbQ3O3NvqkUgtaUIRpYNdiwg9x9QjiJKDtVCEeuLX3ZXrV63Favvt6qeNfeVhY/XuV1QHSXZW1ju5H8ECoooWdnIBcpJEWrtBT5n84wgbbSqru5QsUuKZX/KXGGMyvke54M1HIqrgGVZdWJqrGuZeK4+ilqr2OsJrhojI/9RQeW3kUgptmrUg8Nr6oSK4mLOpq+bgV6MVWiOAxFUXltp5Ctdh2M9La1zD8C4PYbdcZaowpfEgj2egTtAySZtVmWjf+3Xw+PDJ5r56sE2vlZCsKJc0YdijZZ7jgVVLRFR69VlGww28rUaovzUsZPpWdVw5LldI+rjcFkd+2XBUgv3U+Vg+Z6aK12dDhk3nJxFljX7bNtxksUjbbFdOz9v3ZtteSN5Pddb45i4w7kJuhkLY13HjEfl5wempWVg6upTiCafhG1HGqt7PLur6fEcthRoxPlhqakX2qGe1lcTTfOPrGnu96LH/d5kj6plxzDsGw2c79cqocVIfRF8GWkRHab7OQdBDESYOBXh3Qa2SbDVLn4MfrnleQBSd6SVfj50J/6KsqClZ1d2wKKFuryzjw1v6VryY34vV2swWb5w0hWOSutDXp0RUMWjIwy86ezVWbXtCO0BA7yWPjDnj4wtI7ZMurocGtbNMDAeIOpG5POs0JA1h8tNsn/BZ/Cpr50HMIJcz+Ls0jopz8WDhZZBIDpYyKv7oUxq4+HmEFZe/IxyMbh5dDr2JqUlGd1MmjDGwXD9/4ulepzxENrEaq4ZAGPLxsPyZOZfZ/zudpv1ep12aP9387SwkIktSUjP47VmhOs8Rxy2M+QNoZliq+OBMXjLjrT/I4dO2WIx6Jiao1Q4M9paRwIjDt17DOaBiBM5dKGQ3LfBZ8EDoRwmgbgV9M2P2l33jU4NXmNExKFzQMi8KYHqd+AzPxm3rh5gJjNnHezBwlFYzA2v2dg431w985nME3aJBns9dUb4fWVS9CRJorFVN+H6JRXkd/ogKeOjDEvqfSKnMDucvLHwkEOptsSOxHQSA5FQjscEfel8IHTlHX9/Rp4Vl+yG+HsY8H2WPe9XPNY9i4dGhshCow3lnD8RBRgLDyedwFK4kk8zgjQbuJtGkLf3f+U3AIcwuWcCiKTq9BAajAFzd+Ag8zTlpSdjyrFERALzkhwg455MIB1r/q/8BiadYkYoJBl/r4z21F609zDtPL7cECHnXqpTSLZlj1W5uvnyKvShF54jEP8parUZlMzTU338U9SCmHnCcMyK5fLv7ltfancytb5+Kog2z+vew/QTYVdk6/pfLY13WgyTjwGspeoN3zpiCNVMK6GciqlHPKrHkvuNNMNo2LKHP010va76SBsvdXv8TiZo2kfODUVI3Od73b7kzU+JdRbGYgPtZLMRXCaZcO8D5Iyz/7J5UGlMrIwocC6N2UpZ1OXgHevcU6MxXKUk+xc5lweCcbHwWYu+Z/VcqHzqOg5SuryxmyKDhpSlj7ryzJPT6YbRc9jDmp7GwhsXExKyXsuGpUgkwkVM7SOp8utlLu7oRo6Yw5YQpe7Ln8cHZef2t5Sq19kDV1GaZ+mgeeGZi2eroSHJlkvdS21UXOL8szRCqrIElWGCwbJxmg6JWwJ3t5XK9FVxJBlX5n5NhGgA/UJNDfbWjW2iq1Q5Ful6ci9ZHCwYUaQ4jmXhnFcHaNwZPoFBGVrNKoM7KxkdrW5pBtk5+0549Qlskh9grNVDrh8KB3a40oIz1BCB/daeftc8gEQzN7lt6vB1AxcLrJQx7camCNKYsbAh9QSZA6Ju3aPWdMabEYN6I7eDdv1z6tbE/e0ZpZwNWEXAM6J192WltlswW5BCnSDQH++B8mBH2kWXrrkQIO3mEQ8OpyRJLufM0PYQFlZPaW04zyR8nE+3el+fClLa/5XT+Hoc6BIyxvpizkCFYzNhopc59+WdXPp6Xzlo8YVKfT8dLHQNPe3OpinwCr4jop7Y2KqRWXz2iI+nha16f+ppHvNgPUqu/wFUR7UxXCH2C1YUhWIKEXRNZxOyNftisH9u8tyBGaHOJ3mSymJNZbpinTNTEXfEsy/pHgntbpP4uRtSkl3eerPuHCummGKmA3u+gvWp6U9wZn1DQDU4pMQHdZk9+xO6m8Zs+30mpjjerpfL6VrPqSHS1anM8/K0+qLa+eGHH3744Ycffvjhhx/+V/gPET+/VgijSkIAAAAASUVORK5CYII=" 
      class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mi sitio web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('users')}}" class="nav-link">
                        Usuarios
                    </a>
                </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">@yield('title')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
       @yield('section')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://adminlte.io">Mawe Tecnologias</a>.</strong>
    All rights reserved.

  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
@yield('script')
</body>
</html>