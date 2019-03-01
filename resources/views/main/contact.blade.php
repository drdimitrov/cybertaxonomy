@extends('layouts.main')

@section('content')

<div class="container content">
    <div class="row">
        <div class="col-md-8">
            @if(session()->has('msg'))
            <div class="alert alert-success" role="alert">
            {{ session('msg') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header"><h2>Send us a message</h2></div>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name">
                            @if ($errors->has('name'))
                               <p style="color:red; font-size: 0.8em;">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">
                                We'll never share your email with anyone else.
                            </small>
                            @if ($errors->has('email'))
                                <p style="color:red; font-size: 0.8em;">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" placeholder="The subject of your message">
                            @if ($errors->has('subject'))
                               <p style="color:red; font-size: 0.8em;">{{ $errors->first('subject') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="question">Your question:</label>
                            <textarea class="form-control" rows="5" name="question"></textarea>
                            @if ($errors->has('question'))
                                <p style="color:red; font-size: 0.8em;">{{ $errors->first('question') }}</p>
                            @endif
                        </div>

                        {{ csrf_field() }}

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h2>Contact us</h2></div>
                <div class="card-body">
                    <address>
                        <strong>National Museum of Natural History</strong><br>
                        1 Tsar Osvoboditel blvd.<br>
                        1000 Sofia<br>
                        Bulgaria<br>
                        <abbr title="Phone">Phone:</abbr> +359 2 222222
                    </address>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection