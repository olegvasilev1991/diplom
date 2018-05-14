@extends('admin.layouts.admin_template')


@section('admin.content')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="/css/flipclock.css">

    <script src="/js/flipclock.js"></script>

    <script type="text/javascript">
        var clock;

        $(document).ready(function() {
            var clock;

            clock = $('.clock').FlipClock({
                clockFace: 'DailyCounter',
                autoStart: false,
                language:'ru',
                callbacks: {
                    stop: function() {
                        $('.message').html('Турнір закінчився')
                    }
                }
            });
            clock.setCountdown(true);
            clock.setTime({{ $time }});

            clock.start();

        });
    </script>


    <div class='row'>
        <div class='col-md-10'>
            <!-- Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Randomly Generated Tasks</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    @if(empty($active))
                        <div class="title  ">Наступний турнір через</div>
                    @else
                        <div class="title message">До закінчення турніру</div>
                    @endif
                    <div class="clock" style="margin: 0 auto; max-width: 623px;margin-top: 5em;"></div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <form action='#'>
                        <input type='text' placeholder='New task' class='form-control input-sm' />
                    </form>
                </div><!-- /.box-footer-->
            </div><!-- /.box -->
        </div><!-- /.col -->

    </div><!-- /.row -->
@endsection