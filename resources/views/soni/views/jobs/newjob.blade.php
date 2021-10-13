@extends('layout.master')
@section('title', 'Job Post')
@section('parentPageTitle', 'Job')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="form-group">
                    <label>Poster Job<br><small>try to upload file larger than 100 KB</small></label>


                    <div class="body">
                        <input type="file" class="dropify" data-max-file-size="100K">
                    </div>
                </div>
                <div class="form-group">
                    <label>Job Title</label>
                    <input type="text" class="form-control" placeholder="Enter Article title" />
                </div>
                <label>Job Type</label>
                <select class="form-control show-tick">
                    <option>Select Type</option>
                    <option>Free</option>
                    <option>Premium</option>


                </select>
                <!-- <div class="form-group m-t-20 m-b-20">
                    <label>Article Poster</label>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for
                        the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div> -->
                <br>
                <label>Job Description</label>
                <div class="summernote">
                    <!-- <h3 class="m-b-0">hi,</h3>
                    <h4 class="m-t-0">we are Summernote</h4> -->
                    <p></p>
                </div>
                <button type="button" class="btn btn-block btn-primary   m-t-20">Post</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-script')
jQuery(document).ready(function() {

$('.summernote').summernote({
height: 350, // set editor height
minHeight: null, // set minimum height of editor
maxHeight: null, // set maximum height of editor
focus: false, // set focus to editable area after initializing summernote
popover: { image: [], link: [], air: [] }
});

$('.inline-editor').summernote({
airMode: true
});

});

window.edit = function() {
$(".click2edit").summernote()
},

window.save = function() {
$(".click2edit").summernote('destroy');
}

@stop