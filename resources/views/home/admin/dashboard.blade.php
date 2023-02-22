@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        
        <p class="fs-5 fw-bold">List Test Siswa</p>
        {{-- <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="fs-6">Nama</th>
                    <th class="fs-6">Tes Gaya Belajar</th>
                    <th class="fs-6">Tes Tingkatan Berpikir Logis</th>
                    <th class="fs-6">Pretest Asesmen Adaptif</th>
                    <th class="fs-6">Postest Asesmen Adaptif</th>
                    <th class="fs-6">Tes Tingkatan Berpikir Logis 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>

                        @if (isset($user->dataStyle->learning_s))
                            <td>{{ $user->dataStyle->learning_s }}</td>
                        @else
                            <td>Kosong</td>
                        @endif

                        @if (isset($user->dataLogic->sum))
                            <td>{{ $user->dataLogic->sum * 10 }}</td>
                        @else
                            <td>Kosong</td>
                        @endif

                        @if (isset($user->dataPretest->sum))
                            <td>{{ $user->dataPretest->sum }}</td>
                        @else
                            <td>Kosong</td>
                        @endif

                        @if (isset($user->dataPosttest->sum))
                            <td>{{ $user->dataPosttest->sum }}</td>
                        @else
                            <td>Kosong</td>
                        @endif

                        @if (isset($user->dataLogicii->sum))
                            <td>{{ $user->dataLogicii->sum * 10 }}</td>
                        @else
                            <td>Kosong</td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table> --}}

        <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="fs-6">Nama</th>
                    <th class="fs-6">Total 1</th>
                    <th class="fs-6">Total 2</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @continue($user->id < 6)
                    {{-- @if ($user->is_admin)
                        @continue
                    @endif --}}
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>

                        @if (isset($user->dataOneTrial->total))
                            <td>{{ $user->dataOneTrial->total }}</td>
                        @else
                            <td>Kosong</td>
                        @endif

                        @if (isset($user->dataTwoTrial->total))
                            <td>{{ $user->dataTwoTrial->total }}</td>
                        @else
                            <td>Kosong</td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center mt-5">
            <thead>
                <tr>
                    <th rowspan="3">No</th>
                    <th class="fs-6" rowspan="3">Nama</th>
                    <th class="fs-6" colspan="50">Uji Coba 1</th>
                    <th class="fs-6" rowspan="3">Total 1</th>
                </tr>
                <tr>
                    @for ($i = 1; $i < 101; $i++)
                        @if ($i % 2 == 1)
                            <th>{{ $i }}</th>  
                        @endif
                    @endfor
                </tr>
                <tr>
                    @for ($i = 0; $i < 100; $i++)
                        @if ($i % 2 == 1)
                            <th>{{ $tests[$i]['no'] }}</th>  
                        @endif
                    @endfor
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @continue($user->id < 6  && $user->id > 1)
                    @if (isset($user->dataOneTrial->user_id))
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>

                            @if (isset($user->dataOneTrial->trials))
                                @php
                                    $value = explode(",",$user->dataOneTrial->trials);
                                @endphp

                                @for ($i = 0; $i < 50; $i++)
                                        
                                    @if (isset($value[$i]))
                                        <td>{{ $value[$i] }}</td>
                                    @else
                                        <td></td>
                                    @endif

                                @endfor
                            @else
                                @for ($i = 0; $i < 50; $i++)
                                                                    
                                    <td></td>

                                @endfor
                            @endif

                            

                            @if (isset($user->dataOneTrial->total))
                                <td>{{ $user->dataOneTrial->total }}</td>
                            @else
                                <td>Kosong</td>
                            @endif
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center mt-5">
            <thead>
                <tr>
                    <th rowspan="3">No</th>
                    <th class="fs-6" rowspan="3">Nama</th>
                    <th class="fs-6" colspan="50">Uji Coba 2</th>
                    <th class="fs-6" rowspan="3">Total 2</th>
                </tr>
                <tr>
                    @for ($i = 1; $i < 101; $i++)
                        @if ($i % 2 == 0)
                            <th>{{ $i }}</th>  
                        @endif
                    @endfor
                </tr>
                <tr>
                    @for ($i = 0; $i < 100; $i++)
                        @if ($i % 2 == 0)
                            <th>{{ $tests[$i]['no'] }}</th>  
                        @endif
                    @endfor
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    @continue($user->id < 6 && $user->id > 1)
                    @if (isset($user->dataTwoTrial->user_id))
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>

                                @php
                                    $value = explode(",",$user->dataTwoTrial->trials);
                                @endphp

                                @for ($i = 0; $i < 50; $i++)
                                        
                                    @if (isset($value[$i]))
                                        <td>{{ $value[$i] }}</td>
                                    @else
                                        <td></td>
                                    @endif

                                @endfor
                                
                            @if (isset($user->dataTwoTrial->total))
                                <td>{{ $user->dataTwoTrial->total }}</td>
                            @else
                                <td>Kosong</td>
                            @endif
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        
    </main>
@endsection