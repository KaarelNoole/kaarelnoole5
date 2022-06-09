<x-post-dropdown>
    <x-slot name="trigger">
        <button
            class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ @isset(@currentAuthor) ? ucwords($currentAuthor->name):'Authors' }}
</x-post-dropdown>
