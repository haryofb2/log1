@extends('layout.master')
@section('title', 'Banner Home Phone')
@section('parentPageTitle', 'Setting')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">

                <div class="form-group">
                    <label>Banner Home Mobile Apps<br><small>try to upload file larger than 100 KB</small></label>


                    <div class="body">
                        <input type="file" class="dropify" data-max-file-size="100K">
                    </div>
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