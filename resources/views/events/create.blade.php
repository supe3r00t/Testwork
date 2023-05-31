

@extends('layouts.main')
@section('title','أنشاء ورش جديدة')
@section('content')



    <div class="container">
<div class="row">
        <div class="card-header col-auto">


            <h3>البيانات المطلوبة لانشاء الفعالية</h3>


        <form class="card-body" action="{{route('events.store')}} " method="post"  >
@csrf
            <label class="col-auto" for="title" >عنوان الفعالية:</label>

            <input type="text" name="title"  id="title"><br>
        <select class="form-select" id="floatingSelectGrid" name="type" aria-label="Floating label select example">

            <option value="event">لقائات عمل</option>
            <option value="workshop">ورش عمل</option>
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
            <input type="date" class="form-control" id="start_date" name="start_date">
            <label class="col-auto" for="end_date" >تاريخ انتهاء الحدث:</label>
            <input type="date" class="form-control" id="end_date" name="end_date">
            <label class="col-auto" for="max_guests"> عدد الزوار المسموح للتسجيل</label>
            <input type="max_guests" class="form-control col-auto" name="max_guests">


            <button class="btn btn-primary"  type="submit">تسجيل</button>


        </div>


    </div>




</form>
        </div>
</div>
    </div>

        </div>
    </div>
</div>
    </div>

@endsection
