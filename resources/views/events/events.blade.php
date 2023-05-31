@extends('layouts.main')
@section('title','ورش العمل')
@section('content')

    <div class="container">

                    <div class="card-header col-auto">

<div class="container">
    <h1>لقائات العمل</h1>

    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>

            <th scope="col"></th>
            <th scope="col">انتقال للتسجيل</th>
            <th scope="col">اسم الفعالية</th>
            <th scope="col">تاريخ  ابتداء التسجيل</th>
            <th scope="col">تاريخ انتهاء التسجيل</th>


        </tr>
        </thead>
        <tbody>
        @if($events->count())
            <?php $i=0 ?>
            @foreach($events as $event)
                <?php $i++ ?>
                <tr>

                    <th scope="row"></th>
                    <td>

                        <a class="btn btn-secondary" href="{{route('events.show', $event)}}" role="button">{{$i}}</a>
                    </td>
                    <td>{{$event->title}}</td>
                    <td>{{$event->start_date}}</td>
                    <td>{{$event->end_date}}</td>


                </tr>
            @endforeach
        @endif


        </tbody>
    </table>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
@endsection
