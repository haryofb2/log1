@extends('layout.master')
@section('title', 'Category Course List')
@section('parentPageTitle', 'Course')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Category Course List <small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
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
                                <td>1</td>
                                <td>Family</td>

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
                                <td>2</td>
                                <td>Business</td>

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