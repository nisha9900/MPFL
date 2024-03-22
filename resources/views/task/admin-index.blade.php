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
                                <div class="row align-items-center m-b-10">
                                    <div class="col">
                                        <table class="table table-striped smaller-text">
                                            <thead>
                                                <tr>

                                                    <th scope="col">Index</th>
                                                    <th scope="col">Task Title</th>
                                                    <th scope="col">Details</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Files</th>
                                                    <th scope="col">Branch Name</th>
                                                    <th scope="col">Status</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                // Sort tasks by created_at in descending order
                                                $sortedTasks = $tasks->sortByDesc('created_at');
                                                @endphp
                                                @foreach($sortedTasks as $task)

                                                <tr>
                                                    <th scope="row">{{$loop->index}}</th>
                                                    <td>{{$task->task_topic}}</td>
                                                    <td>{{ Str::limit($task->detail, 50) }} @if (strlen($task->detail) >
                                                        50) ... @endif</td>
                                                    <td>{{ $task->created_at->timezone('Asia/Kathmandu')->format('Y-m-d g:i A') }}
                                                    </td>


                                                    <td> @if (Str::endsWith($task->file, ['.jpg', '.jpeg', '.png',
                                                        '.gif', '.bmp']))
                                                        <!-- Display image -->
                                                        <a href="{{ asset('task/' . $task->file) }}" target="_blank">

                                                            View Image
                                                        </a>

                                                        @elseif (Str::endsWith($task->file, '.pdf'))
                                                        <!-- Display link to PDF file -->
                                                        <a href="{{ asset('task/' . $task->file) }}"
                                                            target="_blank">View PDF</a>
                                                        @else
                                                        <!-- Display file name if it's neither image nor PDF -->
                                                        {{$task->file}}
                                                        @endif
                                                    </td>
                                                    <td>{{$task->created_at}}</td>
                                                    <th
                                                        class="rounded-pill text-center smaller-cell {{ $task->status ? 'bg-success' : 'bg-danger' }}">
                                                        {{ $task->status ? 'Open' : 'Close' }}
                                                    </th>

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