@extends('admin.template.main')


@section('title', 'HOME')


@section('contenido')
    <div class="container">
    <hr>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="jumbotron bg-warning">
                            
                            <h1>Panel de administración</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, nam fugiat sapiente blanditiis, voluptatem suscipit necessitatibus. Nihil consequuntur veniam harum debitis, recusandae! Fugit maiores similique dolores eligendi libero fuga illum?</p>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>


@endsection
