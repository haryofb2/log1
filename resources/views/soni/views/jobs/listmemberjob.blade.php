@extends('layout.master')
@section('title', 'Member Job List')
@section('parentPageTitle', 'Job ')


@section('content')
<style>

</style>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2">
                        <img class="img-fluid" src="{{asset('assets/img/job1.jpg')}}" alt="First slide">
                    </div>
                    <div class="col-lg-10 col-md-10 ">
                        <h3>Sosmed Spesialis</h3>
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
                <h2>Member Job</h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-bordered table-hover js-basic-example dataTable table-custom m-b-0 c_list">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Member</th>
                            <th>User IG</th>
                            <!-- <th>Status</th> -->
                            <th>Rating</th>
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
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>



    </div>
</div>

@stop