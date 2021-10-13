@extends('layout.master')
@section('title', 'Event List')
@section('parentPageTitle', 'Event')


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

td {
    word-wrap: break-word
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

.table tbody tr td a,
.table tbody th td {
    white-space: normal;
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
                <h2>Event List <small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>Poster</th>
                                <th style="width:20%">Event Name</th>
                                <th>Event Type</th>
                                <th>Category</th>
                                <th>Venue</th>
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
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="https://instagram.fcgk8-2.fna.fbcdn.net/v/t51.2885-15/e35/176096388_493522018662561_5101618793757264593_n.jpg?tp=1&_nc_ht=instagram.fcgk8-2.fna.fbcdn.net&_nc_cat=109&_nc_ohc=1x63f9EOgUEAX-HFlkf&edm=AP_V10EAAAAA&ccb=7-4&oh=72eaf9f5cccd00a225755c280da1cf13&oe=60802748&_nc_sid=4f375e"
                                            height="100" alt="">
                                    </a>
                                </td>
                                <td style="width:20px"><a href="{{route('event.detailevent')}}">Upcycle
                                        pakaian lama jadi lebih
                                        fashionableUpcycle
                                        pakaian lama jadi lebih
                                        fashionable</a></td>
                                <td>Free</td>
                                <td>Beauty</td>
                                <td>via Zoom</td>
                                <td>2021/04/21 14:00</td>
                                <td>2021/04/21 15:30</td>
                                <!-- <td>Rp. 0</td> -->
                                <td>20</td>
                                <td style="text-align:center;"><label class="switch">
                                        <input type="checkbox" name="menu" id="menu">
                                        <span class="slider round"></span>
                                    </label></td>
                                <td class="actions">
                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-discard"
                                        data-toggle="tooltip" data-original-title="Reward"><a
                                            href="{{route('event.rewardlist')}}"><i class="icon-star"
                                                aria-hidden="true"></i></a>
                                    </button>
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
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="https://instagram.fcgk8-1.fna.fbcdn.net/v/t51.2885-15/e35/173106602_119378816846435_4864992829926309642_n.jpg?tp=1&_nc_ht=instagram.fcgk8-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=YKfVvtLpZvIAX_PRPFM&edm=AP_V10EAAAAA&ccb=7-4&oh=633121e6de1e23581e78162c54ae9d50&oe=60A21562&_nc_sid=4f375e"
                                            height="100" alt="">
                                    </a>
                                </td>
                                <td style="width:20px"><a href="{{route('event.detailevent')}}">Peran Serta
                                        Kaum Perempuan dalam ...</a>
                                </td>
                                <td><i class="icon-diamond"></i>Premium</td>
                                <td>Life</td>
                                <td>Live IG</td>
                                <td>2021/04/21 10:00</td>
                                <td>2021/04/21 15:30</td>
                                <!-- <td>Rp. 50.000</td> -->
                                <td>16</td>
                                <td style="text-align:center;"><label class="switch">
                                        <input type="checkbox" name="menu" id="menu">
                                        <span class="slider round"></span>
                                    </label></td>
                                <td class="actions">

                                    <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-discard"
                                        data-toggle="tooltip" data-original-title="Reward"><a
                                            href="{{route('event.rewardlist')}}"><i class="icon-star"
                                                aria-hidden="true"></i></a>
                                    </button>
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