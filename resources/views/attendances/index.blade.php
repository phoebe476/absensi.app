@extends('layouts.app')

@section('title', 'Absensi App')

@section('content')
{{-- Link icon add --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />

<style>
    body {
        background-color: #ffffff;
        font-family: 'Gloria Hallelujah', cursive;
        margin: 0;
        padding: 0;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #5A827E;
        margin-top: 30px;
        font-size: 34px;
    }

    .table-container {
        position: relative;
        width: 80%;
        margin: 30px auto 60px auto;
    }

    .add-icon {
        position: absolute;
        top: -45px;
        right: 0;
        font-size: 30px;
        color: #5A827E;
        cursor: pointer;
        transition: transform 0.2s;
    }

    .add-icon:hover {
        transform: scale(1.1);
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background-color: white;
        box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        padding: 14px 16px;
        border-bottom: 1px solid #EAEAEA;
        text-align: left;
    }

    th {
        background-color: #5A827E;
        color: white;
        font-weight: 600;
    }

    tr:hover {
        background-color: #f7f9fa;
    }

    .actions a {
        margin-right: 10px;
        color: #5A827E;
        text-decoration: none;
        font-weight: bold;
    }

    .actions a:hover {
        text-decoration: underline;
    }

    .actions form {
        display: inline;
    }

    .actions button {
        background: none;
        border: none;
        color: red;
        cursor: pointer;
        font-weight: bold;
    }
</style>

<h1>ABSENSI</h1>

<div class="table-container">
    <a href="{{ route('attendances.create') }}">
        <span class="material-symbols-outlined add-icon">add</span>
    </a>
    <table>
        <thead>
            <tr>
                <th>Nama Mahasiswa</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($attendances as $attendance)
<tr>
    <td>{{ $attendance->employee_name }}</td>
    <td>{{ $attendance->date }}</td>
    <td>{{ $attendance->status }}</td>
    <td>
        <a href="{{ route('attendances.edit', $attendance->id) }}">Edit</a>
        <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="color:red">Hapus</button>
        </form>
    </td>
</tr>
@endforeach

        </tbody>
    </table>
</div>
@endsection
