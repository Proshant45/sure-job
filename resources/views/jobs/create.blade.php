<x-layout>
    <x-page-heading>New Job </x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Web Developer"/>
        <x-forms.input label="Salary" name="salary" placeholder="$100000 Per Year" />
        <x-forms.input label="Location" name="location" placeholder="Los Angeles"/>
        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time </option>
        </x-forms.select>
        <x-forms.checkbox label="Featured" name="featured"/>
        <x-forms.input label="URL" name="url" placeholder="www.sure-job.com"/>
        <x-forms.divider/>
        <x-forms.input label="Tags" name="tags" placeholder="Forntend,Backend,...." />

    <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
