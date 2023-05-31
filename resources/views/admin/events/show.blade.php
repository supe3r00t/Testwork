






@extends('layouts.main')
@section('title','ورش العمل')
@section('content')

    <div class="container">

        <div class="row row-auto">
            <div class="card-header col-auto">







                <div class="alert alert-light" role="alert">
                   بيانات الزوار المسجلين في <br>
                  (  {{ $event->title}} )
                </div>

                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead class="col">
                        <tr class="col">
                            <th scope="col"># </th>
                            <th scope="col"> اسم الزائر </th>
                            <th scope="col">رقم الجوال </th>
                            <th scope="col">تصنيف الزائر</th>



                        </tr>
                        </thead>
                        <tbody class="container">
                        <?php $i=0 ?>
                        @foreach($event->guests as $guest)
                            <?php $i++ ?>
                            <tr>


                                <td>



                            <tr>
                                <div class="btn-group col-auto">

                                    <td class="btn btn-danger" >{{$i}}-</td>
                                    <td ><a class="btn btn-outline-dark">{{$guest->title.'. '.$guest->name}}</a></td>
                                    <td class="">{{$guest->phone}}</td>
                                    <td class="btn btn-outline">{{$guest->title}}</td>


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
