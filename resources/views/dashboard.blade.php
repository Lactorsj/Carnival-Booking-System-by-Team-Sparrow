<x-app-layout>
    <link rel="stylesheet" href="/css/app.css">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-2 bg-white border-b border-gray-200">
                    @if($number == 0)
                    <p class="p-6 text-xl" align="center">No Reservation Yet</p>
                    @else
                    <table cellpadding="10" cellspacing="10" align="center">
                        <thead>
                        <tr>
                            <th class="text-xl" width="300px" height="60px">Reserved Date</th>
                            <th class="text-xl" width="400px" height="60px">Invitation Code</th>
                            <th class="text-xl" width="300px" height="60px"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($invList as $inv)
                        <tr>
                            <td height="60px" align="center">{{ $inv->reserve_date }}</td>
                            <td height="60px" align="center">{{ $inv->invitation }}</td>
                            <td height="60px" align="center" class="text-cyan-400">
                                @if ($inv->reserve_date < $_ENV['CURRENT_DAY'] && $inv->state == 0)
                                <p class="text-gray-400">Passed</p>
                                @elseif ($inv->state == 1)
                                <p class="text-gray-400">Verified</p>
                                @elseif ($inv->reserve_date >= $_ENV['CURRENT_DAY'] && $inv->state == 0)
                                <a class="p-2 text-gray-700 hover:text-gray-900 hover:bg-gray-100" href="{{ route('InvDelete',array('invId'=> $inv->reserve_id )) }}">Cancel</a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <form style="text-align:center" method="get" action="{{ route('booking') }}">
        <button class="p-2 bg-white border-b border-gray-300">Commit New Reservation</button>
    </form>
    <div style=" height:100px"></div>

</x-app-layout>
