@extends('home.layouts.main')

@section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 pt-4 mt-2">
        
        <p class="fs-5 fw-bold">List Test Siswa</p>
        <table class="table table-striped table-hover table-info table-bordered border-info w-auto text-center">
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
                    {{-- @if ($user->is_admin)
                        @continue
                    @endif --}}
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
        </table>
        
    </main>
@endsection