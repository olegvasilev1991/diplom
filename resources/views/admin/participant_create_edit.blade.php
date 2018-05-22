@extends('admin.layouts.admin_template')

@section('admin.content')
    <div class='row'>
        <div class='col-md-12'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{$page_title}}</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <form action='{{ route('admin.tournaments.store') }}' method="post">
                    @csrf
                <div class="box-body">
                    <table class="table">
                        <thead>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="col">Фото</th>
                        </tr>
                        <tr>
                            <th scope="col">ID-card</th>
                        </tr>
                        <tr>
                            <th scope="col">Прізвище</th>
                            <th><input type='text' name="name" placeholder='Прізвище' class='form-control input-sm'/></th>
                        </tr>
                        <tr>
                            <th scope="col">Ім'я</th>
                            <th>
                                <input type='datetime-local' name="start" placeholder='Ім`я' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">Дата народження</th>
                            <th>
                                <input type='time' name="finish" placeholder='Дата народження' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">E-mail</th>
                            <th>
                                <input type='text' name="points" placeholder='E-mail' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">Телефон</th>
                            <th>
                                <input type='text' name="points" placeholder='Номер телефону' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">Стать</th>
                            <th>
                                <input type='text' name="points" placeholder='стать' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col"></th>
                        </tr>




                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary mb-2">Додати</button>
                    </form>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection