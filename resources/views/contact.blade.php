@extends('layouts.app')

@section('title', 'Contact Us')

@section('header')
    <h1 class="text-2xl">Contact Page</h1>
@endsection

@section('content')
    <h2 class="text-xl mb-4">Contact Information</h2>

    <div class="overflow-x-auto">
        <table class="table-auto w-full border-collapse border border-gray-400">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">No</th>
                    <th class="border border-gray-300 px-4 py-2">Name</th>
                    <th class="border border-gray-300 px-4 py-2">Position</th>
                    <th class="border border-gray-300 px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 5; $i++)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $i }}</td>
                    <td class="border border-gray-300 px-4 py-2">Person {{ $i }}</td>
                    <td class="border border-gray-300 px-4 py-2">Position {{ $i }}</td>
                    <td class="border border-gray-300 px-4 py-2">person{{ $i }}@example.com</td>
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
@endsection
