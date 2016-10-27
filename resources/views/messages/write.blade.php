@extends('layouts.site')

@section('content')
    <h1 class="page-header">Contact</h1>

    <p class="lead">
        We will answer all questions and comments quickly as possible. We appreciate your interest!
    </p>

    <div class="row">

        <div class="col-md-4">

            <form class="form" action="/contact" method="post">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="email">Message</label>
                    <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Send</button>
            </form>

        </div>

    </div>
@endsection
