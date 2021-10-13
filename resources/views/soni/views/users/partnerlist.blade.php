@extends('layout.master')
@section('title', 'Partner List')
@section('parentPageTitle', 'User')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Partner List <small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>Partner Name</th>
                                <th>Address Office</th>
                                <th>Registered Date</th>

                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="{{asset('assets/img/xs/avatar10.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Partner 1 </p>
                                    </a>
                                </td>
                                <td>Jl. Sudirman</td>
                                <td>2011/04/25</td>
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
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="{{asset('assets/img/xs/avatar10.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Partner 2 </p>
                                    </a>
                                </td>
                                <td>Kuningan Barat</td>
                                <td>2011/04/25</td>
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
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="{{asset('assets/img/xs/avatar10.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Partner 3 </p>
                                    </a>
                                </td>
                                <td>BSD</td>
                                <td>2011/04/25</td>
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
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="{{asset('assets/img/xs/avatar10.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Partner 4 </p>
                                    </a>
                                </td>
                                <td>jl. Menteng Dalam</td>
                                <td>2011/04/25</td>
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