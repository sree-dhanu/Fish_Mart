@extends('index')
@section('indexbody')




<div class="tm-container">
    <div class="tm-row">
        <!-- Site Header -->
        <div class="tm-right " style="padding-left: 300px; ">
            <main class="tm-main pl-5">
                <div id="drink" class="tm-page-content">
                    <!-- Drink Menu Page -->
                    <center>
                        <h1 class="tm-page-fonts "><b>Registration</b></h1>
                    </center>


                    <!-- /.card-header -->


                    <!-- //form -->
                    <form action="/addregisteraction" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTitle1">Name</label>
                                <input type="text" class="form-control" name="rname" id="exampleInputName" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdescription1">Email</label>
                                <input type="email" class="form-control" name="remail" id="exampleInputEmail" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdescription1">Phone</label>
                                <input type="tel" class="form-control" name="rphone" id="exampleInputContact" placeholder="Enter Phonenumber">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdescription1">Username</label>
                                <input type="text" class="form-control" name="runame" id="exampleInputContact" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputdescription1">Password</label>
                                <input type="password" class="form-control" name="rpassword" id="exampleInputContact" placeholder="Enter password">
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                    </form>
                </div>
            </main>
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</div>



@endsection