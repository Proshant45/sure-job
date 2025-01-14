@props(['job'])
<x-panel class="flex flex-col">
    <div class="self-start text-sm">
        Employer
    </div>
    <div class="py-8 text-center">
        <h3 class="group-hover:text-blue-600 text-2xl font-bold transition-colors duration-300"> PHP programmer </h3>
        <p class="mt-4"> Full Time From-$60000 </p>
    </div>
    <div class="flex justify-between items-center">
        <div >
            @foreach ($job->tags as $tag)
            <x-tag :tag='$tag' size="small"> Programmer </x-tag>
            @endforeach
        </div>
        <x-employer-logo :width='42'/>
    </div>

</x-panel>
