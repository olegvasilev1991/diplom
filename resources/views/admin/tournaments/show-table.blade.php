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
                        @foreach($participants as $key => $participant)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{ $participant->last_name }}</td>
                                <td>{{ $participant->first_name }}</td>

                                @for($i=1;$i<=$data['points'];$i++)
                                    <td><spant class="{{ $participant->points->firstWhere('kp',$i) ?'fa fa-check' : 'fa fa-close'}}"></spant></td>
                                @endfor
                                <td>
                                    @if($participant->points->pluck('created_at')->last())
                                    {{ $participant->points->pluck('created_at')->last() }}
                                        @if($data->finish < $participant->points->pluck('created_at')->last())
                                            <br>вибув за часом
                                            @endif
                                        @elseif($data->finish < now())
                                            вибув
                                        @endif
                                    </td>
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