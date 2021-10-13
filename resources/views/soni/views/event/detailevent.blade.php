@extends('layout.master')
@section('title', 'Detail Event')
@section('parentPageTitle', 'Event')


@section('content')

<div class="row clearfix">
    <div class="col-lg-7 col-md-12 left-box">
        <div class="card single_post">
            <div class="body">
                <div>
                    <img class="d-block img-fluid"
                        src="https://instagram.fcgk8-1.fna.fbcdn.net/v/t51.2885-15/e35/173106602_119378816846435_4864992829926309642_n.jpg?tp=1&_nc_ht=instagram.fcgk8-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=YKfVvtLpZvIAX_PRPFM&edm=AP_V10EAAAAA&ccb=7-4&oh=633121e6de1e23581e78162c54ae9d50&oe=60A21562&_nc_sid=4f375e"
                        height="100%" alt="First slide">
                </div>
                <h3><a href="javascript:void(0);">All photographs are accurate</a></h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>


    </div>
    <div class="col-lg-5 col-md-12 right-box">
        <div class="card">
            <div class="body">
                <a style="color:#fff" href="{{route('event.rewardlist')}}"><button
                        class="btn btn-md form-control btn-pure on-default m-r-5" style="background:orange;color:#fff"
                        data-toggle="tooltip" data-original-title="Reward List">
                        <i class="icon-star" aria-hidden="true"></i>
                        Reward List</button></a>
            </div>
        </div>
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
                        </tr>
                    </thead>
                    <!-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot> -->
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

                            <!-- <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                        aria-hidden="true"></i></a>
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                        data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                            </td> -->
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

                            <!-- <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                        aria-hidden="true"></i></a>
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                        data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                            </td> -->
                        </tr>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar9.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 3 </p>
                            </td>
                            <td><i class="icon-diamond"></i> Premium</td>
                            <td>customer3</td>
                            <!-- <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                        aria-hidden="true"></i></a>
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                        data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                            </td> -->
                        </tr>
                        <tr>
                            <td><a href="{{route('users.detailmember')}}"><img
                                        src="{{asset('assets/img/xs/avatar3.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">Customer 4 </p>
                                </a>
                            </td>
                            <td>Free</td>
                            <td>customer4</td>
                            <!-- <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                        aria-hidden="true"></i></a>
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                        data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                            </td> -->
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
                            <!-- <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                        aria-hidden="true"></i></a>
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                        data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                            </td> -->
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
                            <!-- <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                        aria-hidden="true"></i></a>
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                        data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                            </td> -->
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
                            <!-- <td class="actions">
                                <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                    data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                        aria-hidden="true"></i></a>
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                        data-toggle="tooltip" data-original-title="Discard" hidden><i class="icon-close"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                            </td> -->
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>



    </div>
</div>

@stop