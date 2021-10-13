@extends('layout.master')
@section('title', 'User List')
@section('parentPageTitle', 'Table')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>User List <small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <!-- <th>Age</th> -->
                                <th>Start date</th>
                                <th>Action</th>
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
                                <td><img src="{{asset('assets/img/xs/avatar1.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">tes </p>
                                </td>
                                <td>tes@gmail.com</td>
                                <td>Depok</td>
                                <!-- <td>61</td> -->
                                <td>2011/04/25</td>
                                <!-- <td>$320,800</td> -->
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/xs/avatar2.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">tes2 </p>
                                </td>
                                <td>tes2@gmail.com</td>
                                <td>Jakarta</td>
                                <!-- <td>61</td> -->
                                <td>2011/04/25</td>
                                <!-- <td>$320,800</td> -->
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/xs/avatar3.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">tes3 </p>
                                </td>
                                <td>tes3@gmail.com</td>
                                <td>Surabaya</td>
                                <!-- <td>61</td> -->
                                <td>2011/04/25</td>
                                <!-- <td>$320,800</td> -->
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/xs/avatar4.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">tes4 </p>
                                </td>
                                <td>tes4@gmail.com</td>
                                <td>Jakarta</td>
                                <!-- <td>61</td> -->
                                <td>2011/04/25</td>
                                <!-- <td>$320,800</td> -->
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/xs/avatar5.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">tes5 </p>
                                </td>
                                <td>tes5@gmail.com</td>
                                <td>Kalimantan</td>
                                <!-- <td>61</td> -->
                                <td>2011/04/25</td>
                                <!-- <td>$320,800</td> -->
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/xs/avatar6.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">tes6 </p>
                                </td>
                                <td>tes6@gmail.com</td>
                                <td>Depok</td>
                                <!-- <td>61</td> -->
                                <td>2011/04/25</td>
                                <!-- <td>$320,800</td> -->
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{asset('assets/img/xs/avatar7.jpg')}}" class="rounded-circle avatar"
                                        alt="">
                                    <p class="c_name">tes7 </p>
                                </td>
                                <td>tes7@gmail.com</td>
                                <td>Bandung</td>
                                <!-- <td>61</td> -->
                                <td>2011/04/25</td>
                                <!-- <td>$320,800</td> -->
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="Save" hidden><i class="icon-drawer"
                                            aria-hidden="true"></i></a>
                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard"
                                            data-toggle="tooltip" data-original-title="Discard" hidden><i
                                                class="icon-close" aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                                data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                    aria-hidden="true"></i></a>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                    data-toggle="tooltip" data-original-title="Remove"><i
                                                        class="icon-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @stop