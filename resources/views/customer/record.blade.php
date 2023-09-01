<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon Airlines | Record</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('index.js') }}"></script>
    {{-- test --}}
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <img src="{{ asset('img/pii.png') }}" alt="">
                <div class="logo-text">
                    <h4>Paragon Airlines</h4>
                </div>
            </div>
            <ul>
                <li><a href="{{ route('customer') }}">HOME</a></li>
                <li><a href="{{ route('customer.about') }}">ABOUT</a></li>
                <li><a href="{{ route('customer.information') }}">INFORMATION</a></li>
                <li><a href="{{ route('customer.terms') }}">TERMS</a></li>
                <li><a href="{{ route('customer.contact.contact') }}">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">

                        <div class="card-header">
                            <h3 class="card-title">FLIGHT HISTORY RECORD</h3>
                        </div>
                        {{-- <form method="get" action="">

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="from">From</label>
                                        <select id="from" class="form-control" name="from" required>
                                            <option value="" disabled selected>Select origin</option>
                                            <option value="{{ Request::get('from') }}">Phnom Penh International Airport
                                                (PNH) - Cambodia
                                            </option>
                                            <option value="{{ Request::get('from') }}">Siem Reap International Airport
                                                (REP) - Cambodia
                                            </option>
                                            <option value="{{ Request::get('from') }}">Sihanoukville International
                                                Airport (KOS) - Cambodia
                                            </option>
                                            <option value="{{ Request::get('from') }}">Bangkok Suvarnabhumi Airport (BKK) - Thailand
                                            </option>
                                            <option value="{{ Request::get('from') }}">Kuala Lumpur International Airport (KUL) - Malaysia
                                            </option>
                                        </select>
                                        
                                        <label for="to">To</label>
                                        <select id="to" class="form-control" name="to" required>
                                            <option value="" disabled selected>Select destination</option>
                                            <option value="{{ Request::get('to') }}">Phnom Penh International Airport
                                                (PNH) - Cambodia
                                            </option>
                                            <option value="{{ Request::get('to') }}">Siem Reap International Airport
                                                (REP) - Cambodia
                                            </option>
                                            <option value="{{ Request::get('to') }}">Sihanoukville International
                                                Airport (KOS) - Cambodia
                                            </option>
                                            <option value="{{ Request::get('to') }}">Bangkok Suvarnabhumi Airport (BKK) - Thailand
                                            </option>
                                            <option value="{{ Request::get('to') }}">Kuala Lumpur International Airport (KUL) - Malaysia
                                            </option>
                                        </select>
                                        
                                    </div>
                                    <div class="form-group col-md-3">
                                        <button class="btn btn-primary" type="submit"
                                            style="margin-top:30px;">Search</button>

                                        <a href="{{ url('customer/contact/record') }}" class="btn btn-success"
                                            style="margin-top: 30px;">Clear</a>
                                    </div>
                                </div>
                            </div>
                        </form> --}}
                        <form method="get" action="">

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="from">From</label>
                                        <select id="from" class="form-control" name="from" required>
                                            <option value="" disabled selected>Select origin</option>
                                            <option value="0">Phnom Penh International Airport (PNH) - Cambodia</option>
                                            <option value="1">Siem Reap International Airport (REP) - Cambodia</option>
                                            <option value="2">Sihanoukville International Airport (KOS) - Cambodia</option>
                                            <option value="3">Bangkok Suvarnabhumi Airport (BKK) - Thailand</option>
                                            <option value="4">Kuala Lumpur International Airport (KUL) - Malaysia</option>
                                        </select>
                        
                                        <label for="to">To</label>
                                        <select id="to" class="form-control" name="to" required>
                                            <option value="" disabled selected>Select destination</option>
                                            <option value="0">Phnom Penh International Airport (PNH) - Cambodia</option>
                                            <option value="1">Siem Reap International Airport (REP) - Cambodia</option>
                                            <option value="2">Sihanoukville International Airport (KOS) - Cambodia</option>
                                            <option value="3">Bangkok Suvarnabhumi Airport (BKK) - Thailand</option>
                                            <option value="4">Kuala Lumpur International Airport (KUL) - Malaysia</option>
                                        </select>
                        
                                    </div>
                                    <div class="form-group col-md-3">
                                        <button class="btn btn-primary" type="submit" style="margin-top:30px;">Search</button>
                        
                                        <a href="{{ route('record') }}" class="btn btn-success"
                                            style="margin-top: 30px;">Clear</a>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-md-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">FLIGHT TICKET RECORD</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Class</th>
                                        <th>Departure</th>
                                        <th>Return</th>
                                        <th>Adult</th>
                                        <th>Children</th>
                                        <th>Infants</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($getRecord as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>
                                                @if ($value->from == 0)
                                                    <span>Phnom Penh Airport</span>
                                                @elseif ($value->from == 1)
                                                    <span>Siem Reap Airport</span>
                                                @elseif ($value->from == 2)
                                                    <span>Sihanoukville Airport</span>
                                                @elseif ($value->from == 3)
                                                    <span>Bangkok Suvarnabhumi Airport</span>
                                                @elseif ($value->from == 4)
                                                    <span>Kuala Lumpur International Airport (KUL) - Malaysia</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($value->to == 0)
                                                    <span>Phnom Penh Airport</span>
                                                @elseif ($value->to == 1)
                                                    <span>Siem Reap Airport</span>
                                                @elseif ($value->to == 2)
                                                    <span>Sihanoukville Airport</span>
                                                @elseif ($value->to == 3)
                                                    <span>Bangkok Suvarnabhumi Airport</span>
                                                @elseif ($value->to == 4)
                                                    <span>Kuala Lumpur International Airport (KUL) - Malaysia</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($value->class == 0)
                                                    <span>Economy</span>
                                                @elseif ($value->class == 1)
                                                    <span>Business</span>
                                                @elseif ($value->class == 2)
                                                    <span>First Class</span>
                                                @endif
                                            </td>
                                            <td>{{ $value->departure }}</td>
                                            <td>{{ $value->return }}</td>
                                            <td>{{ $value->adult }}</td>
                                            <td>{{ $value->children }}</td>
                                            <td>{{ $value->infants }}</td>
                                            <td>{{ $value->created_at }}</td>
                                            <td>{{ $value->updated_at }}</td>
                                            <td style="display: block;">
                                                <div class="button-group">
                                                    <a href="{{ url('customer/edit/' . $value->id) }}"
                                                        class="btn btn-primary"
                                                        style="width: 50px; font-size:14px; display: inline-block;">Edit</a>
                                                    <a href="{{ url('customer/delete/' . $value->id) }}"
                                                        class="btn btn-danger"
                                                        style="width: 70px; font-size:14px; display: inline-block;">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            </table>

                            {{-- page --}}
                            <div style="padding:10px; float:right;">
                                    {{ $getRecord->links() }}
                                </div>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
    </section>
</body>
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<script>
    document.getElementById('dateInput').valueAsDate = new Date();
</script>

</html>
