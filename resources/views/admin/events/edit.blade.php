


@extends('layouts.main')
@section('title','أنشاء ورش جديدة')
@section('content')



    <div class="container">
        <div class="row">
            <div class="card-header col-auto">


                <h3> للتعديل </h3>


                <form class="card-body" action="{{route('admin.events.update',$event->id)}} " method="post">
                    @csrf
                    @method('patch')
                    <label class="col-auto" for="title" > عنوان الفعالية:</label>

                    <input type="text" name="title" value="{{$event->title}}"  id="title"><br>
                    <select class="form-select" id="floatingSelectGrid" name="type" aria-label="Floating label select example">

                        <option value="event" @if($event->type === 'event') selected @endif>لقائات عمل</option>
                        <option value="workshop" @if($event->type ==='workshop') selected @endif>ورش عمل</option>
                    </select>

                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @endif

                    <div class="form-floating">
                        <label class="col-auto" for="start_date" >تاريخ بداء الحدث:</label>
                        <label class="col-auto" for="start_date" >{{$event->start_date}}</label>
                        <input type="date"  id="start_date" class="form-control"  name="start_date" value="{{$event->start_date}}">
                        <div>
                        <label class="col-auto" for="end_date" >تاريخ انتهاء الحدث:</label>
                            <label class="col-auto" for="end_date" >{{$event->end_date}}</label>
                            <input type="date"  id="end_date" class="form-control"   name="end_date" value="{{$event->end_date}}">
                        <label class="col-auto" for="max_guests"> عدد الزوار المسموح للتسجيل</label>
                        <input  class="form-control col-auto" type="max_guests"  name="max_guests" value="{{$event->max_guests}}">


                        <button class="btn btn-primary"  type="submit">تعديل</button>


                    </div>


            </div>




            </form>
        </div>
    </div>
    </div>

@endsection
