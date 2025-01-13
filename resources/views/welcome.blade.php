<x-layout>
 <div class="space-y-10">
    <section class="text-center">
        <div>
            <h1 class="text-4xl font-bold py-6"> Let's Find Your Next Job</h1>
        </div>
        <div>
            <form class="mt-6">
                <input class="border-white/10 bg-white/25 rounded-xl px-3 py-2 w-full max-w-xl" type="text" placeholder="Web Developer">
            </form>
        </div>
    </section>
    <section class="pt-10">
        <x-section-heading> Top jobs </x-section-heading>
        <div class="grid lg:grid-cols-3 gap-8 mt-10">
            <div> <x-job-card/></div>
            <div> <x-job-card/></div>
            <div> <x-job-card/></div>
        </div>
    </section>
    <section>
        <x-section-heading> Tags </x-section-heading>
        <div class="mt-6 space-x-5 ">
            <x-tag> tag1 </x-tag>
            <x-tag> tag1 </x-tag>
            <x-tag> tag1 </x-tag>
            <x-tag> tag1 </x-tag>
            <x-tag> tag1 </x-tag>
            <x-tag> tag1 </x-tag>
            <x-tag> tag1 </x-tag>
            <x-tag> tag1 </x-tag>

        </div>
    </section>
    <section>
        <x-section-heading> Recent Jobs </x-section-heading>
        <div class="mt-6 space-y-10">
            <x-job-card-wide/>
            <x-job-card-wide/>
            <x-job-card-wide/>
            <x-job-card-wide/>
        </div>

    </section>
 </div>
</x-layout>
