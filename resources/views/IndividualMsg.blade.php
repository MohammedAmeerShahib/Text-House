@extends('UserLayout')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Individual Message
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
        </ol>
    </section>

    <!-- Main content -->

    <section style="background-color:white" class="content container-fluid">



        <div style="margin-bottom: 2%">
        </div>
        <div style="margin-bottom: 2%">
            <table>
                <tr>
                    <th>
                        <button type="button" class="btn btn-block btn-primary">Compose</button>
                    </th>
                <tr>
            </table>
        </div>
        <table id="SMS" class="table table-bordered table-hover dataTable" role="grid">
            <thead>
            <tr role="row">
                <th width="7%">Number</th>
                <th width="15%">Sent At</th>
                <th width="20%">To</th>
                <th>Message</th>
            </tr>
            </thead>
            <tbody>

            <tr>
                <td>1</td>
                <td>02:04 04/01/2018</td>
                <td>Shipa</td>
                <td>1.7</td>
            </tr>
            <tr>
                <td>2</td>
                <td>02:01 04/01/2018</td>
                <td>Ameer</td>
                <td>A</td>
            </tr>
            <tr>
                <td>3</td>
                <td>04:01 04/01/2018</td>
                <td>Shipa</td>
                <td>1.8</td>
            </tr>
            <tr>
                <td>4</td>
                <td>04:01 04/02/2018</td>
                <td>Sajan</td>
                <td>1.9</td>
            </tr>
            <tr>
                <td>5</td>
                <td>04:01 04/02/2018</td>
                <td>AG</td>
                <td>1.8</td>
            </tr>
            <tr>
                <td>6</td>
                <td>04:05 04/02/2018</td>
                <td>Wicky</td>
                <td>1.8</td>
            </tr>
            <tr>
                <td>7</td>
                <td>04:08 04/02/2018</td>
                <td>Usama</td>
                <td>1.7</td>
            </tr>
            <tr>
                <td>8</td>
                <td>02:08 05/02/2018</td>
                <td>Shaahik</td>
                <td>1.7</td>
            </tr>
            <tr>
                <td>9</td>
                <td>02:21 05/02/2018</td>
                <td>Muni</td>
                <td>1.8</td>
            </tr>
            <tr>
                <td>10</td>
                <td>03:37 06/02/2018</td>
                <td>Kaushigun</td>
                <td>1</td>
            </tr>
            </tbody>
        </table>

    </section>

@endsection
