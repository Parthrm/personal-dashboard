@extends('components.main-page')

@section('heading')
    data engineering stuff
@endsection


@section('content')
@php
    $dict = [];
    
    // Loop through the list
    foreach ($list as $data) {
        // If the key doesn't exist in dict, create an array for it
        if (!isset($dict[$data['skill-name']])) {
            $dict[$data['skill-name']] = [];
        }
        // Add the value to the array for that key
        $dict[$data['skill-name']][] = [
            'id'=>$data['id'],
            'topic'=>$data['topic'],
            'link'=>$data['link'],
            'status'=>$data['status'],
        ];
    }
    $col1 = [
        "Python",
        "SQL",
        "NoSQL",
        "Data Processing",
        "Data Scheduling",
    ];
    $col2 = [
        "Data Warehousing",
        "Cloud AWS",
        "Cl CD",
        "Data Pipeline Practice Project",
        "Interview Questions",
    ];
@endphp
    <script src="{{asset('js/study_stuff.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/checkbox.css')}}">
    <div class="flex justify-end mx-6 mt-2 mb-0" >
        <button id="open" class="border-2 border-gray-500 border-solid px-3 py-2 mx-2 rounded-lg font-semibold hover:bg-slate-500 hover:text-white">Open All</button>
        <button id="close" class="border-2 border-gray-500 border-solid px-3 py-2 mx-2 rounded-lg font-semibold hover:bg-slate-500 hover:text-white">Close All</button>
    </div>
    <div class="grid grid-cols-2 gap-5 mx-4 mt-5">
        {{-- left column --}}
        <div>
            @foreach ($col1 as $skill_name)
                <div class="skill-wrap rounded-lg border-2 border-solid border-slate-400 my-4" >
                    {{-- box heading --}}
                    <div class="heading group/heading p-3 flex justify-between" >
                        <span class="header">{{$skill_name}}</span>
                        <div class="flex ">
                            <span class="selected mx-1"> 5 </span> of <span class="total mx-1"> 10 </span> 
                            <img class="icon ml-4 w-7 p-1 rounded-md group-hover/heading:bg-gray-300 " src="{{asset('icons/arrow.png')}}"  >
                        </div>
                    </div>
                @foreach ($dict[$skill_name] as $item)
                    {{-- box content --}}
                    <div class="skill-builder mx-10 my-4 ">
                        <div class="flex justify-between px-3 py-2 hover:bg-slate-300 rounded">
                            <div class="checkbox-wrapper-11">
                                <input id="{{$item['id']}}" type="checkbox" {{$item['status']==1 ?  "checked" : ""}} name="r" value="2">
                                <label for="{{$item['id']}}">{{$item['topic']}}</label>
                            </div>
                            <a class="" href="{{$item['link']}}">
                                <img class="p-1 w-9 h-9 rounded hover:bg-slate-300 hover:scale-110 transition-all" src="{{asset('icons/link.png')}}" alt="link">
                            </a>
                        </div>
                    </div>
                @endforeach
                </div>
            @endforeach
        </div>
        
        {{-- right column --}}
        <div>
            @foreach ($col2 as $skill_name) 
                <div class="skill-wrap rounded-lg border-2 border-solid border-slate-400 my-4" >
                    <div class="heading group/heading p-3 flex justify-between" >
                        <span class="header">{{$skill_name}}</span>
                        <div class="flex">
                            <span class="selected mx-1"> 5 </span> of <span class="total mx-1"> 10 </span>
                            <img class="icon ml-4 w-7 p-1 rounded-md group-hover/heading:bg-gray-300 " src="{{asset('icons/arrow.png')}}"  >
                        </div>
                    </div>
                    @foreach ($dict[$skill_name] as $item)
                        <div class="skill-builder mx-10 my-4 ">
                            <div class="flex justify-between px-3 py-2 hover:bg-slate-300 rounded">
                                <div class="checkbox-wrapper-11">
                                    <input id="{{$item['id']}}" type="checkbox" {{$item['status']==1 ?  "checked" : ""}} name="r" value="2">
                                    <label for="{{$item['id']}}">{{$item['topic']}}</label>
                                </div>
                                <a class="" href="{{$item['link']}}">
                                    <img class="p-1 w-9 h-9 rounded hover:bg-slate-300 hover:scale-110 transition-all" src="{{asset('icons/link.png')}}" alt="link">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
    @endsection
<style>
.heading:hover{
    .icon{
        opacity: 1;
    }
}
.icon{
    opacity: 0.2;
    transition: all 350ms cubic-bezier(0.075, 0.82, 0.165, 1);
    /* scale: 0.7; */
}
.flip{
    transform:rotate(180deg);
}
.complete{
    border: solid 4px green;
}
.header{
    font-family: heading;
    font-weight: bold;
    font-size: 1.5rem;
}
@font-face {
  font-family: heading;
  src: url("{{asset('fonts/Merriweather_Sans/MerriweatherSans-SemiBold.ttf')}}");
}
</style>

