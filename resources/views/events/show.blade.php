

@extends('layouts.main')
@section('title','استعراض ورش العمل')
@section('content')



<div class="container">
<div class="row row-auto">

{{--  <div class="col">--}}
    <div class="card" style="width: 25rem;">
        <div class="card-header col-auto">

            <h3>لقاءات</h3>


        </div>


        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <h2>اسم لقاء:  {{$event->title}}</h2></li>
            <li class="list-group-item"> تاريخ البداية:  {{$event->start_date}}</li>
            <li class="list-group-item"> تاريخ النهاية:  {{$event->end_date}}</li>
            <li class="list-group-item"> عدد الزوار المسموح به:  {{$event->max_guests}}</li>

        </ul>

            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
            @if($event->guests->count() < $event->max_guests)
                <form class="card-body" method="post" action="{{route('events.signup', $event)}}">
                    @csrf

                    <div class="card-body" >
                        <h5 class="card-title">بيانات المطلوبة للتسجيل</h5>



                        <select class="form-select" id="floatingSelectGrid" name="title" aria-label="Floating label select example">

                            <option  value="mr">طالب</option>
                            <option value="mrs">طالبة</option>
                            <option value="ms">عضو هيئة التدريس</option>
                        </select>


                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif


                        <div class="form-floating">
                            <label class="col-auto" for="floatingInputGrid" >الأسم</label>
                            <input type="text" class="form-control" id="name" name="name">
                            <label for="phone">الجوال</label>
                            <input type="tel" class="form-control" name="phone" id="phone">

                            <button class="btn btn-primary" type="submit">تسجيل</button>

                            @else
                                <h1>التسجيل مغلق، انتهى العدد المسموح به</h1>
            @endif
                        </div>

    </div>


    </div>
  </div>
</div>
  </div>


<div>



@endsection
