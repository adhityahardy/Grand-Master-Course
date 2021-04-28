<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/jsgrid/jsgrid-theme.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="<?= base_url('assets'); ?>/dist/img/logotes.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?= $title ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('assets'); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?= $admin['username'] ?> </a>
                    </div>
                </div>


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Matpel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>Jadwal</p>
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
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Blank Page</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">


                <div>
                    <h1>BERSKI</h1>
                </div>

            </section>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">jsGrid</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="jsGrid1" class="jsgrid" style="position: relative; height: 100%; width: 100%;">
                            <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                <table class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-header-sortable jsgrid-header-sort jsgrid-header-sort-desc" style="width: 150px;">Name</th>
                                        <th class="jsgrid-header-cell jsgrid-align-right jsgrid-header-sortable" style="width: 50px;">Age</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 200px;">Address</th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Country</th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Is Married</th>
                                    </tr>
                                    <tr class="jsgrid-filter-row" style="display: none;">
                                        <td class="jsgrid-cell" style="width: 150px;"><input type="text"></td>
                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td>
                                        <td class="jsgrid-cell" style="width: 200px;"><input type="text"></td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select>
                                                <option value="0"></option>
                                                <option value="1">United States</option>
                                                <option value="2">Canada</option>
                                                <option value="3">United Kingdom</option>
                                                <option value="4">France</option>
                                                <option value="5">Brazil</option>
                                                <option value="6">China</option>
                                                <option value="7">Russia</option>
                                            </select></td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" readonly=""></td>
                                    </tr>
                                    <tr class="jsgrid-insert-row" style="display: none;">
                                        <td class="jsgrid-cell" style="width: 150px;"><input type="text"></td>
                                        <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;"><input type="number"></td>
                                        <td class="jsgrid-cell" style="width: 200px;"><input type="text"></td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select>
                                                <option value="0"></option>
                                                <option value="1">United States</option>
                                                <option value="2">Canada</option>
                                                <option value="3">United Kingdom</option>
                                                <option value="4">France</option>
                                                <option value="5">Brazil</option>
                                                <option value="6">China</option>
                                                <option value="7">Russia</option>
                                            </select></td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="jsgrid-grid-body" style="height: 817px;">
                                <table class="jsgrid-table">
                                    <tbody>
                                        <tr class="jsgrid-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Zachery Atkins</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">30</td>
                                            <td class="jsgrid-cell" style="width: 200px;">549-2208 Auctor. Road</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                        </tr>
                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Xena Wilkerson</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">63</td>
                                            <td class="jsgrid-cell" style="width: 200px;">Ap #303-6974 Proin Street</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">United States</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                        </tr>

                                        <tr class="jsgrid-alt-row">
                                            <td class="jsgrid-cell" style="width: 150px;">Ruby Rocha</td>
                                            <td class="jsgrid-cell jsgrid-align-right" style="width: 50px;">62</td>
                                            <td class="jsgrid-cell" style="width: 200px;">5212 Sagittis Ave</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;">Canada</td>
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><input type="checkbox" disabled=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="jsgrid-pager-container">
                                <div class="jsgrid-pager">Pages: <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">First</a></span> <span class="jsgrid-pager-nav-button jsgrid-pager-nav-inactive-button"><a href="javascript:void(0);">Prev</a></span> <span class="jsgrid-pager-page jsgrid-pager-current-page">1</span><span class="jsgrid-pager-page"><a href="javascript:void(0);">2</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">3</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">4</a></span><span class="jsgrid-pager-page"><a href="javascript:void(0);">5</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Next</a></span> <span class="jsgrid-pager-nav-button"><a href="javascript:void(0);">Last</a></span> &nbsp;&nbsp; 1 of 5 </div>
                            </div>
                            <div class="jsgrid-load-shader" style="display: none; position: absolute; inset: 0px; z-index: 1000;"></div>
                            <div class="jsgrid-load-panel" style="display: none; position: absolute; top: 50%; left: 50%; z-index: 1000;">Please, wait...</div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0
            </div>
            <strong>Copyright &copy; 2021-2021 <a href="#">Grand Master Course</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

</body>

</html>