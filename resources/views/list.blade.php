@extends('layout')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="">Heading 1</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <h4 class="alert-heading">Well done!</h4>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12" style="">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Last Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($announcements as $key => $announcements)
                                    <tr>
                                        <td>{{ ($key + 1) }}</td>
                                        <td>{{ $announcements->title }}</td>
                                        <td>{{ $announcements->comments }}</td>
                                        <td>{{ $announcements->start_date }}</td>
                                        <td>{{ $announcements->expiration_date }}</td>
                                        <td>{{ $announcements->active }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Ação
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('announcements.edit', $announcements->id) }}">Alterar</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Inativar</a>
                                                </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="pagination">
                        <li class="page-item"> <a class="page-link" href="#"> <span>«</span></a> </li>
                        <li class="page-item active"> <a class="page-link" href="#">1</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                        <li class="page-item"> <a class="page-link" href="#">4</a> </li>
                        <li class="page-item"> <a class="page-link" href="#"> <span>»</span></a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
