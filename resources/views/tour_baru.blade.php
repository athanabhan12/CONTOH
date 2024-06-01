<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Siliwangi Holiday</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" href="../../assets/img/logo/logo_tour.png" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../../assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/azzara.min.css">

</head>
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<div class="main-header" style="background-color: #0E46A3">
			<!-- Logo Header -->
			<div class="logo-header" style="background-color: #0E46A3;">
				
				<a href="{{ route('admin') }}" class="logo">
					{{-- <h1 class="navbar-brand" style="color: white">Siliwangi Holiday</h1> --}}
					<img src="../../assets/img/logo/logo_tour.png" class="" width="150px" height="40px"  alt="">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon" style="color: white">
						<i class="fa fa-bars" style="color: white"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars" style="color: white"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<i class="fa-solid fa-user fa-2x" style="color: black;"></i>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<form action="/logout" method="post">
										@csrf
										<button class="dropdown-item" type="submit">Logout</button>
									</form>
								</li>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

        <div class="main-panel" style="margin-right: 100px">
            <div class="content">
              <div class="page-inner">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="card-title">Tambah Tour</div>
                      </div>
                      <div class="card-body">
                        <form action="{{ url('tour/store') }}" method="POST">
                          @csrf
                        <div class="row">
                        <div class="form-group col-6">
                          <label for="email2">Nama Tour</label>
                          <input type="text" name="nama_tour" class="form-control" placeholder="Nama Tour..." required>
                        </div>
                          <div class="form-group col-6">
                            <label>Destinasi Tour</label>
                            <input type="text" name="destinasi_tour" class="form-control" placeholder="Destinasi Tour..." required>
                          </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-6">
                          <label for="email2">Tanggal Berangkat Tour</label>
                          <input type="date" name="tgl_berangkat_tour" class="form-control" placeholder="Tanggal Berangkat Tour...">
                        </div>
                        <div class="form-group col-6">
                          <label for="email2">Tanggal Selesai Tour</label>
                          <input type="date" name="tgl_selesai_tour" class="form-control" placeholder="Tanggal Selesai Tour...">
                        </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-6">
                          <label for="email2">Rombongan Tour</label> 
                          <input type="text" name="rombongan_tour" class="form-control" placeholder="Rombongan Tour...">
                        </div>
                          <div class="form-group col-6">
                            <label>Jumlah Peserta</label>
                            <input type="text" name="jumlah_peserta_tour" class="form-control" placeholder="Jumlah Peserta...">
                          </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-6">
                          <label for="email2">Jenis Kendaraan</label>
                          <input type="text" name="jenis_kendaraan" class="form-control" placeholder="Jenis Kendaraan...">
                        </div>
                          <div class="form-group col-6">
                            <label>Jumlah Kendaraan</label>
                            <input type="text" name="jumlah_kendaraan" class="form-control" placeholder="Jumlah Kendaraan..." required>
                          </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-6">
                          <label for="email2">PIC Tour</label>
                          <select name="id_tour_leader" class="form-control" required>
          
                              @foreach ($data_tours as $data_tour)
                              <option value="{{ $data_tour->id }}">{{ $data_tour->nama }}</option>
                          @endforeach
          
                            </select>
                        </div>
                          <div class="form-group col-6">
                            <label>No.Telepon PIC Tour</label>
                            <input type="text" name="no_telepon_pic_tour" class="form-control" placeholder="No Telepon PIC Tour..." required>
                          </div>
                        </div>
                        <div class="button mt-3" style="float: right">
                        <button class="btn btn-success">Submit</button>
                        <a href="{{ route('menu_pilihan') }}" class="btn btn-danger">Cancel</a>
                        </div>
                      </form>
                      </div>
                    </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          </div>

    <!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/90c4b6e831.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<!-- jQuery UI -->
<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="../../assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="../../assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Datatables -->
<script src="../../../../assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="../../assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="../../assets/js/ready.min.js"></script>
<script >
	$(document).ready(function() {
		$('#basic-datatables').DataTable({
		});

		$('#multi-filter-select').DataTable( {
			"pageLength": 5,
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select class="form-control"><option value=""></option></select>')
					.appendTo( $(column.footer()).empty() )
					.on( 'change', function () {
						var val = $.fn.dataTable.util.escapeRegex(
							$(this).val()
							);

						column
						.search( val ? '^'+val+'$' : '', true, false )
						.draw();
					} );

					column.data().unique().sort().each( function ( d, j ) {
						select.append( '<option value="'+d+'">'+d+'</option>' )
					} );
				} );
			}
		});

		// Add Row
		$('#add-row').DataTable({
			"pageLength": 5,
		});

		var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

		$('#addRowButton').click(function() {
			$('#add-row').dataTable().fnAddData([
				$("#addName").val(),
				$("#addPosition").val(),
				$("#addOffice").val(),
				action
				]);
			$('#addRowModal').modal('hide');

		});
	});
</script>

{{-- SCANNER --}}
	

</script>



</body>
</html>