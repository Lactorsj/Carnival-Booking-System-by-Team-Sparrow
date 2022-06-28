<html>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if($_ENV['CURRENT_DAY'] < $_ENV['DayIndex1'])
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-300">
                    DAY 1
                    <a href="{{ route('DayBooking',array('day'=>$_ENV['DayIndex1'])) }}">
                        <button type="button" style="float:right">Book Me!</button>
                    </a>
                </div>
            </div>
        </div><br>
        @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" hidden="hidden">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 1
                </div>
            </div>
        </div><br>
        @endif

        @if($_ENV['CURRENT_DAY'] < $_ENV['DayIndex2'])
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 2
                    <a href="{{ route('DayBooking',array('day'=>$_ENV['DayIndex2'])) }}">
                        <button type="button" style="float:right">Book Me!</button>
                    </a>
                </div>
            </div>
        </div><br>
        @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" hidden="hidden">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 2
                </div>
            </div>
        </div><br>
        @endif

        @if($_ENV['CURRENT_DAY'] < $_ENV['DayIndex3'])
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 3
                    <a href="{{ route('DayBooking',array('day'=>$_ENV['DayIndex3'])) }}">
                        <button type="button" style="float:right">Book Me!</button>
                    </a>
                </div>
            </div>
        </div><br>
        @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" hidden="hidden">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 3
                </div>
            </div>
        </div><br>
        @endif

        @if($_ENV['CURRENT_DAY'] < $_ENV['DayIndex4'])
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 4
                    <a href="{{ route('DayBooking',array('day'=>$_ENV['DayIndex4'])) }}">
                        <button type="button" style="float:right">Book Me!</button>
                    </a>
                </div>
            </div>
        </div><br>
        @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" hidden="hidden">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 4
                </div>
            </div>
        </div><br>
        @endif

        @if($_ENV['CURRENT_DAY'] < $_ENV['DayIndex5'])
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 5
                    <a href="{{ route('DayBooking',array('day'=>$_ENV['DayIndex5'])) }}">
                        <button type="button" style="float:right">Book Me!</button>
                    </a>
                </div>
            </div>
        </div><br>
        @else
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" hidden="hidden">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    DAY 5
                </div>
            </div>
        </div><br>
        @endif
    </div>
</x-app-layout>
</html>
