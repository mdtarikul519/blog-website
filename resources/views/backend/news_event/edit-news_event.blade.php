@extends('backend.layouts.master')
  @section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Mange News and Event</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">News and Event</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3>Add News and Event
                 <a class="btn btn-success float-right" href="{{route('news_events.view')}}"><i class="fa fa-list"></i>News and Event List</a>
                </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
            <form method="post" action="{{route('news_events.update',$editdata->id)}}" id="myform" autocomplete="off"
              enctype="multipart/form-data">
               @csrf
                <div class="form_row">
                 <div class="form_group col-md-4">
                  <label for="date">Date</label>
                  <input type="text" name="date" id="datepicker" class="form-control"
                   placeholder="YYYY-MM-DD" value="{{$editdata->date}}"  readonly>
                 </div>
                  <div class="form_group col-md-8">
                  <label for="short_title">Short Title</label>
                  <input type="text" name="short_title" value="{{$editdata->short_title}}" class="form-control">
                 </div>
                  <div class="form_group col-md-12">
                  <label for="long_title">Long Title</label>
                  <textarea name="long_title" class="form-control" rows="5">{{$editdata->long_title}}</textarea>
                 </div>
                
                 <div class="form_group col-md-4">
                  <label for="image">Image</label>
                  <input type="file" name="image" class="form-control" onchange="loadFile(event)" id="image">
                 </div>

                <div class="form_group col-md-2">
                  @if($editdata->image != null)
                 <img class="profile-user-img img-fluid img-circle" src="/upload/news_event_images/{{ $editdata->image  }} " alt="User profile picture">
                  @else
                  <img class="profile-user-img img-fluid img-circle" id="output" src="/upload/no-image-found.jpg" alt="User profile picture">
                  @endif
                  </div>
                  <div class="form-group col-md-6" style="padding-top: 25px">
                   <input type="submit" value="submit" class="btn btn-primary">
                 </div>

                </div>
              </form>
              </div><!-- /.card-body -->
            </div>

            <!-- /.card -->
          </section>
         </div>
     </div>
        </section> 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script type="text/javascript">
   $(document).ready(function () {
  $('#myform').validate({
    rules:{
      name: {
        required: true,
      },
       usertype: {
        required: true,
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 6
      },
       password2: {
        required: true,
        equalTo:'#password'
      }
    },
    messages: {
        name: {
        required: "Please enter your name",
      },
       usertype: {
        required: "Please select user role",
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
     password2: {
        required: "Please enter confirm password",
        minlength: "confirm password does not match"
      }
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
 <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format :'yyyy-mm-dd'
        });
    </script>
  @endsection