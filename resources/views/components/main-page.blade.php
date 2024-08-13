@php
    $diff = mktime(0,0,0,5,21,2028) - mktime(0,0,0,date('m'),date('d'),date('Y'));
    $today_date = date('d M Y');
    $remaining_days = round($diff/(60*60*24));
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="{{asset('js/jquery.js')}}"></script>
        <title>Personal Dashboard</title>
    </head>
    <body>
        <div class="h-[100vh] w-full flex">
            {{-- left side bar section --}}
            <div class="bg-slate-400 w-[13%] min-w-28" >
                Lorem, ipsum.
            </div>
            {{-- main section --}}
            <div class=" flex-grow">
                {{-- top section --}}
                <div class="flex justify-between mx-10" >
                    <div class="">
                        {{$today_date}}
                        {{$remaining_days}}
                    </div>
                    <div>
                        links
                    </div>
                </div>
                {{-- main section --}}
                <div>
                    {{-- heading --}}
                    <div class="bg-slate-300 text-center text-2xl font-bold" >
                        @yield('heading')
                    </div>
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>