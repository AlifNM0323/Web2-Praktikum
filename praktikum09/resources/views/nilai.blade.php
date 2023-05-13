@php
    $nama = 'Alif';
    $nilai = 80;
@endphp
{{-- struktur kendali if --}}
@if ($nilai >= 60)
    @php $ket = "Lulus"; @endphp
@else
    @php $ket = "Gagal"; @endphp
@endif
Siswa {{ $nama }} dengan nilai {{ $nilai }}
dinyatakan {{ $ket }}
