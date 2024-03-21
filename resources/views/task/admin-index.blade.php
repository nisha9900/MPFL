@extends('layouts.app')

@section('content')

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5>Home</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i
                                                class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#!">Analytics Dashboard</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->
                <div class="row">
                    <!-- product profit start -->
                    <div class="col-xl-12 col-md-6">
                        <div class="card prod-p-card bg-c-gray">
                            <div class="card-body">
                                <div class="row align-items-center m-b-25">
                                    <div class="col">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>

                                                    <th scope="col">First</th>
                                                    <th scope="col">Last</th>
                                                    <th scope="col">Handle</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">image</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($tasks as $task)
                                                <tr>
                                                    <th scope="row">{{$loop->index}}</th>
                                                    <td>{{$task->task_topic}}</td>
                                                    <td>{{$task->detail}}</td>
                                                    <td>{{$task->created_at}}</td>
                                                    <td> @if (Str::endsWith($task->file, ['.jpg', '.jpeg', '.png',
                                                        '.gif', '.bmp']))
                                                        <!-- Display image -->
                                                        <img src="{{ asset('task/' . $task->file) }}"
                                                            class="rounded-circle" alt="Image" width="50" height="50"
                                                            alt="Image">
                                                        @elseif (Str::endsWith($task->file, '.pdf'))
                                                        <!-- Display link to PDF file -->
                                                        <a href="{{ asset('task/' . $task->file) }}"
                                                            target="_blank">View PDF</a>
                                                        @else
                                                        <!-- Display file name if it's neither image nor PDF -->
                                                        {{$task->file}}
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
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

@endsection