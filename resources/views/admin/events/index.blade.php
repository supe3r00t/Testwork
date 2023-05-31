@extends('layouts.main')
@section('title','ورش العمل')
@section('content')

    <div class="container">

        <div class="row row-auto">
        <div class="card-header col-auto">



                <a class="btn btn-outline-dark" href="{{route('events.create')}}">{{ __('Create') }}</a>




                <h1>لقائات العمل</h1>

                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class="col">
                        <tr class="col">
                            <th scope="col"># </th>
                            <th scope="col"> عنوان الفعالية </th>
                            <th scope="col">مشاهدة الزوار </th>
                            <th scope="col">نوع الحدث</th>
                            <th scope="col">تاريخ  ابتداء التسجيل</th>
                            <th scope="col">تاريخ انتهاء التسجيل</th>
                            <th scope="col">عدد الضيوف المسموح</th>
                            <th scope="col">تعديل</th>
                            <th scope="col">حذف</th>


                        </tr>
                        </thead>
                        <tbody class="container">
                        <?php $i=0 ?>
                        @foreach($events as $event)
                            <?php $i++ ?>
                            <tr>


                                <td>



                            <tr>
                                <div class="btn-group col-auto">

                                <td class="btn btn-info" >{{$i}}-</td>
                                    <td><a class="btn btn-light" href="{{route('events.show', $event)}}">{{$event->title}}</a></td>
                                    <td ><a class="btn btn-outline-dark" href="{{route('admin.events.show', $event)}}">{{$event->max_guests}}</a></td>
                                <td>{{$event->type}}</td>
                                <td class="btn btn-secondary btn-sm">{{$event->start_date}}</td>
                                <td class="">{{$event->end_date}}</td>
                                <td class="btn btn-secondary  disabled">{{$event->max_guests}}</td>
                                <td><a class="btn btn-outline-dark" href="{{route('admin.events.edit', $event->id)}}">{{ __('Edit') }}</a></td>
                                <td><a class="btn btn-outline-danger" href="{{route('admin.events.delete', $event)}}">{{ __('Delete') }}</a></td>


                                @endforeach

                            </tr>





                        </tbody>
                    </table>
                </div>
        </div>
        </div>
                </div>
        </div>
    </div>

                </div>
        </div>
    </div>

                </div>
            </div>
        </div>


@endsection
