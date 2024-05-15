@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add Client</div>
                <div class="card-body">
                    <form action="/clients" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Domain</label>
                            <input type="text" class="form-control" id="domain" name="domain" placeholder="domain">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Add Client</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
