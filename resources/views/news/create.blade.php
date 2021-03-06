@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="headline">
                    <h4>Create a news post</h4>
                </div>
                <news-create-view></news-create-view>
            </div>
        </div>
    </div>
@endsection
@section('above_scripts')
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
    CKEDITOR.config.disableNativeSpellChecker = false;
</script>
@endsection
