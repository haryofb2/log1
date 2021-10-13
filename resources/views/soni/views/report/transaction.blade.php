@extends('layout.master')
@section('title', 'Transaction In - Out')
@section('parentPageTitle', 'Report')


@section('content')


<div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>Total Transaction Out</h6>
                    <span>300,000</span>
                </div>
                <!-- <small class="text-muted">19% compared to last week</small> -->
            </div>

        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card overflowhidden number-chart">
            <div class="body">
                <div class="number">
                    <h6>Total Transaction IN</h6>
                    <span>150,000</span>
                </div>
                <!-- <small class="text-muted">19% compared to last week</small> -->
            </div>

        </div>
    </div>
</div>
<div class="row clearfix">

    <div class="col-lg-6">
        <div class="card">
            <div class="header">
                <h2>Transaction Out<small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">

                <div class="row clearfix">

                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Transaction Out Name</th>
                                        <th>Description</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>Reward Event 1</td>
                                        <td>Hadiah Gopay Rp. 50,000</td>
                                        <td>50,000</td>

                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>Reward Event 2</td>
                                        <td>Hadiah Gopay Rp. 150,000</td>
                                        <td>150,000</td>

                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>Reward Event 3</td>
                                        <td>Hadiah Merchandise</td>
                                        <td>100,000</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="header">
                <h2>Transaction In<small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">

                <div class="row clearfix">

                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table
                                class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Transaction In Name</th>
                                        <th>Description</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>Member Premium</td>
                                        <td>Member Premium atas nama member 1</td>
                                        <td>50,000</td>

                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>Member Premium</td>
                                        <td>Member Premium atas nama member 2</td>
                                        <td>50,000</td>

                                    </tr>
                                    <tr>
                                        <td>2011/04/25</td>
                                        <td>Member Premium</td>
                                        <td>Member Premium atas nama member 3</td>
                                        <td>50,000</td>

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @stop