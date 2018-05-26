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
                            <th scope="col">Назва</th>
                            <th scope="col">Початок турніру</th>
                            <th scope="col">Закінчення турніру</th>
                            <th scope="col">Кількість контрольних пунктів</th>
                            <th scope="col">Результати змагань</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tournaments as $tournament)
                                <tr>
                                    <td>{{ $tournament['id'] }}</td>
                                    <td>{{ $tournament['name'] }}</td>
                                    <td>{{ $tournament['start'] }}</td>
                                    <td>{{ $tournament['finish'] }}</td>
                                    <td> {{ $tournament['points'] }}</td>
                                    <td>Переглянути</td>
                                    <td>
                                        <form action="{{ route('admin.tournaments.destroy',[$tournament['id']]) }}" method="post" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="fa fa-trash-o" onclick="return confirm('Видалити цей турнір?')"></button>
                                        </form>
                                    </td>
                                </tr>
                        @endforeach
                        <tr>
                            <th></th>

                            <form action='{{ route('admin.tournaments.store') }}' method="post">
                                @csrf
                                <th><input type='text' name="name" placeholder='Назва' class='form-control input-sm'/></th>
                                <th><input type='datetime-local' name="start" placeholder='Початок турніру' class='form-control input-sm'/></th>
                                <th><input type='text' name="finish" placeholder='Кількіть хвилин' class='form-control input-sm'/></th>
                                <th><input type='text' name="points" placeholder='Кількість контрольних пунктів' class='form-control input-sm'/></th>
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