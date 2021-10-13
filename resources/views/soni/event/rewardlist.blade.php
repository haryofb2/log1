@extends('layout.master')
@section('title', 'Reward Event List')
@section('parentPageTitle', 'Event ')


@section('content')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2">
                        <img class="img-fluid"
                            src="https://instagram.fcgk8-1.fna.fbcdn.net/v/t51.2885-15/e35/173106602_119378816846435_4864992829926309642_n.jpg?tp=1&_nc_ht=instagram.fcgk8-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=YKfVvtLpZvIAX_PRPFM&edm=AP_V10EAAAAA&ccb=7-4&oh=633121e6de1e23581e78162c54ae9d50&oe=60A21562&_nc_sid=4f375e"
                            alt="First slide">
                    </div>
                    <div class="col-lg-10 col-md-10 ">
                        <h3>Peran Serta Kaum Perempuan dalam Melestarikan Budaya di Era Milenial</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been
                            the
                            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of
                            type
                            and scrambled it to make a type specimen book. It has survived not only five centuries, but
                            also
                            the
                            leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                            1960s
                            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 ">
        <div class="card">
            <div class="header">
                <h2>Member of Winner</h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Member</th>
                            <th>User IG</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar10.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 1 </p>
                                </a>
                            </td>
                            <td>Free</td>
                            <td>customer1</td>
                            <td><span class="badge badge-warning">Waiting to Confirm</span></td>

                            <td class="actions">
                                <!-- <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Select to winner"><i class="icon-star"
                                        aria-hidden="true"></i></a> -->

                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar1.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 2 </p>
                                </a>
                            </td>
                            <td>Free</td>
                            <td>customer2</td>
                            <td><span class="badge badge-info">Confirmed</span></td>
                            <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Select to winner"><i
                                        class="icon-paper-plane" aria-hidden="true"></i> Send to Reward</a>

                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar9.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 3 </p>
                            </td>
                            <td><i class="icon-diamond"></i> Premium</td>
                            <td>customer3</td>
                            <td><span class="badge badge-success">Completed</span></td>
                            <td class="actions">
                                <!-- <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Select to winner"><i class="icon-star"
                                        aria-hidden="true"></i></a> -->

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>



    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 ">
        <div class="card">
            <div class="header">
                <h2>Member Registered</h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Member</th>
                            <th>User IG</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>



                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar3.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 4 </p>
                                </a>
                            </td>
                            <td>Free</td>
                            <td>customer4</td>

                            <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Select to winner"><i class="icon-star"
                                        aria-hidden="true"></i> Select to Winner</a>

                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar10.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 5 </p>
                                </a>
                            </td>
                            <td><i class="icon-diamond"></i> Premium</td>
                            <td>customer5</td>

                            <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Select to winner"><i class="icon-star"
                                        aria-hidden="true"></i> Select to Winner</a>

                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar5.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 6 </p>
                                </a>
                            </td>
                            <td>Free</td>
                            <td>customer6</td>

                            <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Select to winner"><i class="icon-star"
                                        aria-hidden="true"></i> Select to Winner</a>

                            </td>
                        </tr>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar6.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 7 </p>
                                </a>
                            </td>
                            <td><i class="icon-diamond"></i> Premium</td>
                            <td>customer7</td>

                            <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Select to winner"><i class="icon-star"
                                        aria-hidden="true"></i> Select to Winner</a>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>



    </div>
</div>

@stop