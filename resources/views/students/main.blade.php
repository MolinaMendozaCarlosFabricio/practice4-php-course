@extends('layouts.students')
@section('title', "Students")

@section('dinamic-content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre del estudiante</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Lenguaje que está aprendiendo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->language }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection