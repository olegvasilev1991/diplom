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
                <div class="box-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">ID-Card</th>
                            <th scope="col">Прізвище</th>
                            <th scope="col">Ім'я</th>
                            <th scope="col">Дата народження</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Стать</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($participants as $participant)
                                <tr>
                                    <td>{{ $participant['id'] }}</td>
                                    <td>{{ ($participant['id_card']) ?? '-' }}</td>
                                    <td>{{ $participant['last_name'] }}</td>
                                    <td>{{ $participant['first_name'] }}</td>
                                    <td>{{ $participant['birth'] }}</td>
                                    <td> {{ $participant['phone'] }}</td>
                                    <td> {{ ($participant['sex']) ? 'жіноча':'чоловіча' }}</td>
                                    <td><a href="{{ route('admin.participants.edit',$participant['id']) }}"><button>Редагувати</button></a></td>
                                </tr>
                        @endforeach
                        <tr>
                            <th></th>
                        </tr>

                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ route('admin.participants.create') }}"><button type="submit" class="btn btn-primary mb-2">Додати</button>
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