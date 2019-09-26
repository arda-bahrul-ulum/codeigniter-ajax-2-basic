    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- css -->
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <!-- font awesome -->
        <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">

        <!-- jquery -->
        <script type="text/javascript" src="<?= base_url('assets/jquery/jquery-3.4.1.min.js'); ?>"></script>
        <!-- popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <!-- js -->
        <script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

        <title><?= $title; ?></title>
    </head>

    <body>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <div class="container">
                <a class="navbar-brand" href="#">CI_AJAX</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /.navbar -->

        <div class="container">

            <div class="row mt-3 text-sm">
                <div class="col-md-10">
                    <h5>Data Mahasiswa</h5>
                </div>
            </div>

            <!-- Button trigger modal -->
            <div class="row mt-2">
                <div class="col-md-10">
                    <button type="button" class="btn btn-sm btn-info" onclick="submit('add data')" data-toggle="modal" data-target="#target"><i class="fa fa-plus-circle"></i>
                        add
                    </button>
                </div>
            </div>
            <!-- /.Button trigger modal -->

            <!-- table -->
            <div class="row mt-3 text-sm">
                <div class="col-md-10">
                    <table class="table table-sm table-bordered table-striped">
                        <thead class="table-info">
                            <tr>
                                <td scope="col" class="text-center">Id</td>
                                <td scope="col" class="text-center" colspan="1">Action</td>
                                <td scope="col" class="text-center">Username</td>
                                <td scope="col" class="text-center">Password</td>
                                <td scope="col" class="text-center">Fullname</td>
                                <td scope="col" class="text-center">Gender</td>
                                <td scope="col" class="text-center">Address</td>
                                <td scope="col" class="text-center">Religion</td>
                                <td scope="col" class="text-center">Is_active</td>
                            </tr>
                        </thead>
                        <tbody id="hasil">

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.table -->

            <!-- Modal -->
            <div class="modal fade" id="target" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                            <!-- form -->
                            <form class="text-sm">

                                <!-- hidden -->
                                <input type="hidden" name="id" id="id" value="">
                                <!-- /.hidden -->

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" name="username" class="form-control form-control-sm" id="username" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control form-control-sm" id="password" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Fullname</label>
                                    <input type="text" name="fullname" class="form-control form-control-sm" id="fullname" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Gender :</label><br>
                                    <input type="radio" name="gender" id="gender1" value="L" placeholder=""> Laki-Laki <br>
                                    <input type="radio" name="gender" id="gender2" value="P" placeholder=""> Perempuan
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea type="text" name="address" class="form-control form-control-sm" id="address" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="religion">Religion</label>
                                    <select name="religion" class="form-control form-control-sm" id="religion">
                                        <option selected disabled>Pilih..</option>
                                        <option value="1">Islam</option>
                                        <option value="2">Kristen</option>
                                        <option value="3">Katholik</option>
                                        <option value="4">Hindu</option>
                                        <option value="5">Budha</option>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" name="is_active" id="is_active" value="1" placeholder="">
                                    <label for="is_active">Active</label>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">exit</button>
                                    <button type="button" id="btn_tambah" onclick="tambah_data()" class="btn btn-sm btn-info">save</button>
                                    <button type="button" id="btn_update" onclick="update_data()" class="btn btn-sm btn-info">update</button>
                                </div>

                            </form>
                            <!-- /.form -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- /.modal -->

        </div>

        <!-- script  ajax js -->
        <script type="text/javascript">
            // ambil_data
            ambil_data();

            function ambil_data() {
                $.ajax({
                    type: 'post',
                    url: '<?= base_url() . 'home/ambil_data' ?>',
                    dataType: 'json',
                    success: function(data) {

                        var baris = '';
                        no = 1;
                        for (var i = 0; i < data.length; i++) {
                            baris += '<tr>' +
                                '<td class="text-sm-center">' + no++ + '</td>' +
                                '<td class="text-sm-center"><button data-toggle="modal" data-target="#target" class="btn btn-sm " onclick="submit(' + data[i].id + ')"><i class="fa fa-edit"></i></button><button onclick="hapus_data(' + data[i].id + ')" class="btn btn-sm"><i class="fa fa-trash-o"></i></button></td>' +
                                '<td class="text-sm-center" >' + data[i].username + ' </td>' +
                                '<td class="text-sm-center" >' + data[i].password + ' </td>' +
                                '<td class="text-sm-center" >' + data[i].fullname + ' </td>' +
                                '<td class="text-sm-center" >' + data[i].gender + ' </td>' +
                                '<td class="text-sm-center" >' + data[i].address + ' </td>' +
                                '<td class="text-sm-center" >' + data[i].religion + ' </td>' +
                                '<td class="text-sm-center" >' + data[i].is_active + ' </td>' +
                                '</tr>';
                        }
                        $('#hasil').html(baris);
                    }
                });
            }

            // tambah_data
            function tambah_data() {

                var username = $("[name='username']").val();
                var password = $("[name='password']").val();
                var fullname = $("[name='fullname']").val();
                var address = $("[name='address']").val();
                var religion = $("[name='religion']").val();


                if (document.getElementById('gender1').checked) {
                    gender = document.getElementById('gender1').value;
                } else {
                    gender = document.getElementById('gender2').value;
                }

                if (document.getElementById('is_active').checked) {
                    is_active = document.getElementById('is_active').value;
                } else {
                    is_active = 0;
                }

                $.ajax({
                    type: 'post',
                    data: '&username=' + username + '&password=' + password + '&fullname=' + fullname + '&gender=' + gender + '&address=' + address + '&religion=' + religion + '&is_active=' + is_active + '',
                    url: '<?= base_url() . 'home/tambah_data'; ?>',
                    dataType: 'json',
                    success: function(data) {

                        $('#target').modal('hide');
                        ambil_data();

                        $("[name='username']").val('');
                        $("[name='password']").val('');
                        $("[name='fullname']").val('');
                        $("[name='address']").val('');
                        $("[name='religion']").val('');
                        $("[name='gender']").prop('checked', false);
                        $("[name='is_active']").prop('checked', false);

                    }
                });
            }

            // edit_data
            function submit(x) {
                if (x == 'add data') {
                    $('#btn_tambah').show();
                    $('#btn_update').hide();

                    $("[name='username']").val('');
                    $("[name='password']").val('');
                    $("[name='fullname']").val('');
                    $("[name='address']").val('');
                    $("[name='religion']").val('');
                    $("[name='gender']").prop('checked', false);
                    $("[name='is_active']").prop('checked', false);


                } else {
                    $('#btn_tambah').hide();
                    $('#btn_update').show();

                    $.ajax({
                        type: 'post',
                        data: 'id=' + x,
                        url: '<?= base_url() . 'home/edit_data'; ?>',
                        dataType: 'json',
                        success: function(data) {

                            $("[name='id']").val(data[0].id);
                            $("[name='username']").val(data[0].username);
                            $("[name='password']").val(data[0].password);
                            $("[name='fullname']").val(data[0].fullname);
                            $("[name='address']").val(data[0].address);
                            $("[name='religion']").val(data[0].religion);
                            $("[name='gender']").prop('checked', true);
                            $("[name='is_active']").prop('checked', true)
                        }
                    });
                }
            }

            // update_data
            function update_data() {

                var id = $("[name='id']").val();
                var username = $("[name='username']").val();
                var password = $("[name='password']").val();
                var fullname = $("[name='fullname']").val();
                var address = $("[name='address']").val();
                var religion = $("[name='religion']").val();


                if (document.getElementById('gender1').checked) {
                    gender = document.getElementById('gender1').value;
                } else {
                    gender = document.getElementById('gender2').value;
                }

                if (document.getElementById('is_active').checked) {
                    is_active = document.getElementById('is_active').value;
                } else {
                    is_active = 0;
                }

                $.ajax({

                    type: 'post',
                    data: '&id=' + id + '&username=' + username + '&password=' + password + '&fullname=' + fullname + '&gender=' + gender + '&address=' + address + '&religion=' + religion + '&is_active=' + is_active + '',
                    url: '<?= base_url() . 'home/update_data'; ?>',
                    dataType: 'json',
                    success: function(data) {

                        $('#target').modal('hide');
                        ambil_data();
                    }
                });
            }

            // hapus_data
            function hapus_data(x) {

                var messege = confirm('Apakah anda yakin akan menghapus data!!');

                if (messege) {
                    $.ajax({
                        type: 'post',
                        data: 'id=' + x,
                        dataType: 'json',
                        url: '<?= base_url() . 'home/hapus_data'; ?>',
                        success: function(data) {
                            if (data == 'true') {
                                ambil_data();
                            }
                        }
                    });
                }
            }
        </script>
        <!-- /.script ajax js -->

    </body>

    </html>