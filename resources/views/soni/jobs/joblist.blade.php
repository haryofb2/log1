@extends('layout.master')
@section('title', 'Job List')
@section('parentPageTitle', 'Job')


@section('content')
<style>
.switch {

    position: relative;
    display: inline-block;
    width: 60px;
    height: 24px;
}

.switch input {
    opacity: 0;
    width: 0;
    height: 0;
}

.slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background: orange !important;
}

.slider:before {
    position: absolute;
    content: "";
    height: 16px;
    width: 16px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked+.slider {
    background-color: #2196F3;
}

input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
    border-radius: 34px;
}

.slider.round:before {
    border-radius: 50%;
}
</style>
<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Job List <small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>Poster</th>
                                <th>Job Name</th>
                                <!-- <th>Job Type</th> -->
                                <!-- <th>Category</th> -->
                                <!-- <th>Venue</th> -->
                                <th>Start Date</th>
                                <th>End Date</th>
                                <!-- <th>Pricing</th> -->
                                <th>Member Registered</th>
                                <th>Publish</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a><img src="{{asset('assets/img/job1.jpg')}}" height="100" alt="">
                                    </a>
                                </td>
                                <td><a href="{{route('jobs.detailjob')}}">Sosmed Spesialist</a></td>
                                <!-- <td>Free</td>
                                <td>Family</td> -->
                                <!-- <td>via Zoom</td> -->
                                <td>2021/04/21 14:00</td>
                                <td>2021/04/21 15:30</td>
                                <!-- <td>Rp. 0</td> -->
                                <td>34</td>
                                <td style="text-align:center;"><label class="switch">
                                        <input type="checkbox" name="menu" id="menu">
                                        <span class="slider round"></span>
                                    </label></td>
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="List Member on the Job"><a
                                            href="{{route('jobs.listmember')}}"><i class="icon-list"
                                                aria-hidden="true"></i></a>

                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a><img src="{{asset('assets/img/job2.jpg')}}" height="100" alt="">
                                    </a>
                                </td>
                                <td><a href="{{route('jobs.detailjob')}}">Talent Video</a></td>
                                <!-- <td><i class="icon-diamond"></i> Premium</td>
                                <td>Business</td>
                                <td>via Zoom</td> -->
                                <td>2021/04/21 10:00</td>
                                <td>2021/04/21 15:30</td>
                                <!-- <td>Rp. 50.000</td> -->
                                <td>54</td>
                                <td style="text-align:center;"><label class="switch">
                                        <input type="checkbox" name="menu" id="menu">
                                        <span class="slider round"></span>
                                    </label></td>
                                <td class="actions">
                                    <button
                                        class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save"
                                        data-toggle="tooltip" data-original-title="List Member on the Job"><a
                                            href="{{route('jobs.listmember')}}"><i class="icon-list"
                                                aria-hidden="true"></i></a>

                                        <button
                                            class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit"
                                            data-toggle="tooltip" data-original-title="Edit"><i class="icon-pencil"
                                                aria-hidden="true"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove"
                                                data-toggle="tooltip" data-original-title="Remove"><i class="icon-trash"
                                                    aria-hidden="true"></i></a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @stop