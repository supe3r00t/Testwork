@extends('layouts.main')
@section('content')
    <div class="container">

        <div class="card-header col-auto">

            <div class="container">
                <h1>ورش العمل</h1>

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
                            <?php $i=0 ?>
            @if($workshops->count())
                @foreach($workshops as $workshop)
                    <?php $i++ ?>
                    <tr>

                        <th scope="row"></th>
                        <td>

                        <a class="btn btn-secondary" href="{{route('events.show', $workshop)}}" role="button">{{$i}}</a>
                        </td>
                        <td>{{$workshop->title}}</td>
                        <td>{{$workshop->start_date}}</td>
                        <td>{{$workshop->end_date}}</td>


                    </tr>
                @endforeach
            @endif


            </tbody>
        </table>

    </div>
</div>
</div>
@endsection





