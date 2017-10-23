@extends('admin.master')
@section('title')
    EspnBD - ADD Slider
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="box box-primary">
                <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD Slider Form</div>
                <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                <form class="form-horizontal" action="{{url('/slider/new')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="TextOne" class="col-sm-2 control-label">Slider Text One</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slider_text_one" id="TextOne" placeholder="Slider Text One">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="TextTwo" class="col-sm-2 control-label">Slider Text two</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slider_text_two" id="TextTwo" placeholder=" SliderText Two">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="TextThree" class="col-sm-2 control-label">Slider Text Three</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="slider_text_three" id="TextThree" placeholder="Slider Text Three">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="SliderImage" class="col-sm-2 control-label">Slider Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="slider_image" id="SliderImage" accept="/*">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="publicationStatus" class="col-sm-2 control-label">publication Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="publicationStatus" name="publication_status">
                                <option> -- Select publication Status--</option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Save Slider info</button>
                        </div>
                    </div>
                </form>
            </div>
        <!-- /.col-lg-12 -->
        </div>
    </div>
@endsection