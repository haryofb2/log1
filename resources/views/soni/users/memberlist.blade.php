@extends('layout.master')
@section('title', 'Member List')
@section('parentPageTitle', 'User')


@section('content')

<div class="row clearfix">

    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Member List <small>Basic example without any additional modification classes</small> </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table
                        class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Member</th>
                                <th>Follow the Event</th>
                                <th>Follow the Course</th>
                                <th>Get a Job</th>
                                <th>Rating on Job</th>
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
                                <td><a href="{{route('users.detailmember')}}"><img
                                            src="{{asset('assets/img/xs/avatar10.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Customer 1 </p>
                                    </a>
                                </td>
                                <td>Free</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                                <td>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </td>
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
                                            src="{{asset('assets/img/xs/avatar1.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Customer 2 </p>
                                    </a>
                                </td>
                                <td>Free</td>
                                <td>12</td>
                                <td>14</td>

                                <td>12</td>
                                <td>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </td>
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
                                            src="{{asset('assets/img/xs/avatar9.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Customer 3 </p>
                                </td>
                                <td><i class="icon-diamond"></i> Premium</td>
                                <td>24</td>
                                <td>61</td>

                                <td>11</td>
                                <td>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </td>
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
                                            src="{{asset('assets/img/xs/avatar3.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Customer 4 </p>
                                    </a>
                                </td>
                                <td>Free</td>
                                <td>2</td>
                                <td>1</td>

                                <td>21</td>
                                <td>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </td>
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
                                        <p class="c_name">Customer 5 </p>
                                    </a>
                                </td>
                                <td><i class="icon-diamond"></i> Premium</td>
                                <td>45</td>
                                <td>21</td>

                                <td>55</td>
                                <td>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </td>
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
                                            src="{{asset('assets/img/xs/avatar5.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Customer 6 </p>
                                    </a>
                                </td>
                                <td>Free</td>
                                <td>23</td>
                                <td>12</td>

                                <td>1</td>
                                <td>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </td>
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
                                            src="{{asset('assets/img/xs/avatar6.jpg')}}" class="rounded-circle avatar"
                                            alt="">
                                        <p class="c_name">Customer 7 </p>
                                    </a>
                                </td>
                                <td><i class="icon-diamond"></i> Premium</td>
                                <td>55</td>
                                <td>54</td>

                                <td>122</td>
                                <td>
                                    <div class="rate">
                                        <input type="radio" id="star5" name="rate" value="5" />
                                        <label for="star5" title="text">5 stars</label>
                                        <input type="radio" id="star4" name="rate" value="4" />
                                        <label for="star4" title="text">4 stars</label>
                                        <input type="radio" id="star3" name="rate" value="3" />
                                        <label for="star3" title="text">3 stars</label>
                                        <input type="radio" id="star2" name="rate" value="2" />
                                        <label for="star2" title="text">2 stars</label>
                                        <input type="radio" id="star1" name="rate" value="1" />
                                        <label for="star1" title="text">1 star</label>
                                    </div>
                                </td>
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