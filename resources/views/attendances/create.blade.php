@extends('layouts.app')

@section('content')
{{-- Import Font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

<style>
    body {
        background-color: #ffffff;
        font-family: 'Gloria Hallelujah', cursive;
        color: #333;
        padding: 0;
        margin: 0;
    }

    .form-container {
        width: 80%;
        max-width: 600px;
        margin: 50px auto;
        background: #fff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    h1 {
        font-family: 'Outfit', sans-serif;
        text-align: center;
        color: #5A827E;
        font-size: 28px;
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
    }

    input, select {
        width: 100%;
        padding: 10px 14px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 16px;
        font-family: 'Outfit', sans-serif;
    }

    button {
        background-color: #5A827E;
        color: white;
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 8px;
        cursor: pointer;
        width: 100%;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #466c66;
    }
</style>

<div class="form-container">
    <h1>Form Absensi</h1>
    <form action="{{ isset($attendance) ? route('attendances.update', $attendance->id) : route('attendances.store') }}" method="POST">
        @csrf
        @if(isset($attendance)) @method('PUT') @endif

        <label for="employee_name">Nama:</label>
        <input type="text" name="employee_name" value="{{ $attendance->employee_name ?? '' }}" required>

        <label for="date">Tanggal:</label>
        <input type="date" name="date" value="{{ $attendance->date ?? '' }}" required>

        <label for="time_in">Jam Masuk:</label>
        <input type="time" name="time_in" value="{{ $attendance->time_in ?? '' }}" required>

        <label for="time_out">Jam Pulang:</label>
        <input type="time" name="time_out" value="{{ $attendance->time_out ?? '' }}" required>

        <label for="status">Status:</label>
        <select name="status" id="status" required>
            <option value="">-- Pilih Status --</option>
            <option value="Hadir" {{ (isset($attendance) && $attendance->status == 'Hadir') ? 'selected' : '' }}>Hadir</option>
            <option value="Izin" {{ (isset($attendance) && $attendance->status == 'Izin') ? 'selected' : '' }}>Izin</option>
            <option value="Sakit" {{ (isset($attendance) && $attendance->status == 'Sakit') ? 'selected' : '' }}>Sakit</option>
        </select>

        <button type="submit">Simpan</button>
    </form>
</div>
@endsection
