@props(['job'])
<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo/>
    </div>

        <div class="flex-1 flex flex-col">
            <a href="#" class="self-start text-gray-400 text-sm">Employer</a>
            <h3 class="font-bold text-xl mt-3 text-bold hover:text-blue-800 border-transparent transition-colors duration-100"  > PHP programmer </h3>
            <p class="text-sm text-gray-400 mt-auto"> Full Time From-$60000 </p>
        </div>
        <div>
            @foreach ($job->tags as $tag)
            <x-tag :tag='$tag'> Programmer </x-tag>
            @endforeach


        </div>

</x-panel>
