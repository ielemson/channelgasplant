@extends('layouts.customerLayout',['title'=>'Channels Gas Plant | Ticket'])


@section('content')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container">

                    {{-- @include('customer.includes.notificationCard') --}}

                    <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Create Ticket</h4>

                                
                                <form method="POST" enctype="multipart/form-data" action="{{ route('ticket.store') }}">
                                    @csrf

                                    <div class="form-group ">
                                        <label for="department">Department</label>
                                        <select class="form-control @error('dpt') is-invalid @enderror" name="dpt" required>
                                            <option value="">Select Department</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Sales">Sales</option>
                                        </select>
                                        @error('dpt')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>



                                    <div class="form-group ">
                                        <label for="subject">Subject</label>
                                        <input id="subject" type="text"
                                            class="form-control @error('subject') is-invalid @enderror" name="subject"
                                            value="{{ old('subject') }}" required placeholder="Enter Complaint Subject">

                                        @error('subject')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group ">
                                        <label for="message">Message</label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" rows="5"
                                            name="message" placeholder="How Can We Assist You?"></textarea>

                                        @error('message')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror">
                                       
                                      </div>

                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    {{-- <button class="btn btn-light">Cancel</button> --}}
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('customer.includes.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
@endsection
