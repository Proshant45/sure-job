@props(['job'])
<x-panel class="flex flex-col text-center">
    <div class="self-start text-sm">
        {{$job->employer->name}}
    </div>
    <div class="py-8 text-center">
        <h3 class="group-hover:text-blue-600 text-2xl font-bold transition-colors duration-300">
            <a href="{{$job->url}}" target="_blank">
            {{$job->title}}</a> </h3>
        <p class="mt-4"> {{$job->salary}} </p>
    </div>
    <div class="flex justify-between items-center">
        <div >
            @foreach ($job->tags as $tag)
            <x-tag :tag='$tag' size="small"> </x-tag>
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width='42'/>
    </div>

</x-panel>
