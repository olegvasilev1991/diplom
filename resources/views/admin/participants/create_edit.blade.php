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
                @if($participant->id)
                    <form action='{{ route('admin.participants.update',[$participant->id]) }}' method="post">
                        @csrf
                        @method('PUT')
                    @else
                            <form action='{{ route('admin.participants.store') }}' method="post">
                                @csrf
                        @endif
                <div class="box-body">
                    <table class="table">
                        <thead>
                        </thead>
                        <tbody>
                        <tr>
                            <th colspan="2">
                              {{--  <form action="/action_page.php">--}}
                                    <input type="file" id="upload" name="photo" accept="image/*">
                                    <img id="myImg" src="#" alt="your image" />
                                    <input type="submit">
                                {{--</form>--}}
                            </th>
                            <th colspan="2"><center>Фото</center></th>
                        </tr>
                        <tr>
                            <th scope="col">ID-card</th>
                            <th><input type='text' name="id_card" value="{{ $participant->id_card ?? '' }}" placeholder='ID-card' class='form-control input-sm'/></th>
                        </tr>
                        <tr>
                            <th scope="col">Прізвище</th>
                            <th><input type='text' name="last_name" value="{{ $participant->last_name ?? '' }}" placeholder='Прізвище' class='form-control input-sm'/></th>
                        </tr>
                        <tr>
                            <th scope="col">Ім'я</th>
                            <th>
                                <input type='text' name="first_name" value="{{ $participant->first_name ?? '' }}" placeholder='Ім`я' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">Дата народження</th>
                            <th>
                                <input type='date' name="birth" value="{{ $participant->birth ?? '' }}" class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">E-mail</th>
                            <th>
                                <input type='email' name="email" value="{{ $participant->email ?? '' }}" placeholder='E-mail' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">Телефон</th>
                            <th>
                                <input type='text' name="phone" value="{{ $participant->phone ?? '' }}" placeholder='Номер телефону' class='form-control input-sm'/>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">Стать</th>
                            <th>
                                <select name="sex">
                                    <option {{ ($participant->sex? '':'selected') ?? '' }} value="0">Чоловіча</option>
                                    <option {{ ($participant->sex? 'selected':'') ?? '' }} value="1">Жіноча</option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col"></th>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary mb-2">Зберегти</button>
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