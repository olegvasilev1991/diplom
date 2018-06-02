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
                            <th scope="col">Прізвище</th>
                            <th scope="col">Ім'я</th>
                            @for($i=1;$i<=$data['points'];$i++)
                                <th scope="col">КП №{{$i}}</th>
                            @endfor
                            <th scope="col">Час</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data->participant as $participant)
                            <tr>
                                <td>#</td>
                                <td>{{ $participant->last_name }}</td>
                                <td>{{ $participant->first_name }}</td>

                                @for($i=0;$i<$data['points'];$i++)
                                    {{dump($participant->points->pluck('kp')->search($i,$i) )}}
                                    <td><spant class="{{ $participant->points->pluck('kp')->search($i,$i) ?'fa fa-check' : 'fa fa-close'}}"></spant></td>
                                @endfor
                               {{-- @foreach($participant->points as $point)

                                    <td><spant class="{{ $point->kp ?'fa fa-check' : 'fa fa-close'}}"></spant></td>

                                    @endforeach--}}
                              {{--  <td><spant class="{{ $point->kp ?'fa fa-check' : 'fa fa-close'}}"></spant></td>
                                <td><spant class="{{ $point->kp ?'fa fa-check' : 'fa fa-close'}}"></spant></td>
                                <td><spant class="{{ $point->kp ?'fa fa-check' : 'fa fa-close'}}"></spant></td>--}}


                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
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